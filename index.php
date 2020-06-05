<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <title>ZMREPO - The ZoneMinder Repository</title>
<!--
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/hover.css" media="all">
-->
    <link rel="stylesheet" href="/css/main.css">
<script>
<?php
$zmrepo_el7_rpms = glob("el/7/x86_64/zmrepo-7-*.noarch.rpm");
$zmrepo_el8_rpms = glob("el/8/x86_64/zmrepo-8-*.noarch.rpm");
$zmrepo_f30_rpms = glob("fc/30/x86_64/zmrepo-30-*.noarch.rpm");
$zmrepo_f31_rpms = glob("fc/31/x86_64/zmrepo-31-*.noarch.rpm");

natsort($zmrepo_el7_rpms);
natsort($zmrepo_el8_rpms);
natsort($zmrepo_f30_rpms);
natsort($zmrepo_f31_rpms);

$zmrepo_el7_rpm = basename(end($zmrepo_el7_rpms));
$zmrepo_el8_rpm = basename(end($zmrepo_el8_rpms));
$zmrepo_f30_rpm = basename(end($zmrepo_f30_rpms));
$zmrepo_f31_rpm = basename(end($zmrepo_f31_rpms));
?>

var Instructions = new Array()
Instructions[0] = ' '

Instructions[1] = '<p><b>Installation instructions for ZoneMinder development rpms on EL7 distributions (x86_64 architectures only)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/7/x86_64/<?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo yum install --nogpgcheck <?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo yum install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README<br></font></p></div>'

Instructions[2] = '<p><b>Installation instructions for ZoneMinder development rpms on EL8 distributions (x86_64 architectures only)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/8/x86_64/<?php echo $zmrepo_el8_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_el8_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README<br></font></p></div>'

Instructions[3] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora 30 (x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/fc/30/x86_64/<?php echo $zmrepo_f30_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f30_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-common/README<br></font></p></div>'
 
Instructions[4] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora 31 (x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/fc/31/x86_64/<?php echo $zmrepo_f31_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f31_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-common/README<br></font></p></div>'
 
function SelectInstructions(select){
	selected = select.selectedIndex;
	document.getElementById('InstText').innerHTML = Instructions[selected];
}
</script>
</head>
<body>
    <img id="logo" src="ZoneMinderSmall.gif" width="175" height="75" style="position:absolute; top:15px; left:20px;" alt="">
    <div class="nav" style="position: absolute; top: 100px; left: 0;">
      <ul>
        <li><a href="#RPM">RPM Fedora/Centos/etc</a></li>
        <li><a href="#DEB">DEB Debian/Ubuntu/etc</a></li>
        <li><a href="#IMG">IMG Raspbian</a></li>
      </ul>
    </div>
  <p>
    <font size="5" style="font-size: 18pt" color="#336699"><b>Welcome to ZMREPO<br>
    The <a href="http://www.zoneminder.com/">ZoneMinder</a> Repository of packages</b></font>
  </p>
<div id="RPM">
<fieldset><legend><a name="RPM">RPM</a></legend>
<br>
<br>
<b>ZONEMINDER RELEASES HAVE MOVED</b><br>
This site hosts i<a href="https://zoneminder.com">ZoneMinder</a> unstable, development rpm packages. If you are looking for stable releases of ZoneMinder, you may find them at <a href="https://rpmfusion.org/">RPM Fusion</a>. Please note that RPM Fusion free is also required for the unstable development rpm packages.
<br>
<p>The following distributions are supported:</p>
<p>
<a href="el/7">EL7</a> (CentOS/RHEL/SL)<br>
<a href="el/8">EL8</a> (CentOS/RHEL/SL)<br>
<a href="fc/30">F30</a> (Fedora 30)<br>
<a href="fc/31">F31</a> (Fedora 31)<br>
</p>
<p align="center" style="font-weight: bold">SUPPORT MATRIX</p>
<table align="center" cellspacing="0">
	<tr align="center" valign="center" style="font-weight: bold">
		<td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			Distribution
		</td>
		<td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			Version
		</td>
		<td colspan="4" style="border: 1px solid black; padding: 0.04in">
			Arch
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="2" style="font-weight: bold; border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			Fedora
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			30
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="fc/30/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="fc/30/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="fc/30/armhfp">armhfp</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="fc/30/aarch64">aarch64</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			31
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="fc/31/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="fc/31/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="fc/31/armhfp">armhfp</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="fc/31/aarch64">aarch64</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="2" style="font-weight: bold; border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			CentOS/RHEL/SL
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			7
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/7/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/7/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			8
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/8/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/8/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="el/8/aarch64">aarch64</a>
		</td>
	</tr>
</table>
<br>
<form autocomplete="off">
Select your Distro to Display the Appropriate Installation Instructions: <select onChange='SelectInstructions(this);'>
<option value="0">Choose your Distro</option>
<option value="1">EL7 CentOS/RHEL/SL 7</option>
<option value="2">EL8 CentOS/RHEL/SL 8</option>
<option value="3">F30 Fedora 30</option>
<option value="4">F31 Fedora 31</option>
</select>
</form>
<br>
<div id="InstText"></div>

<p>Once ZoneMinder has been installed, it is critically important that you read the README file under /usr/share/doc/zoneminder.  ZoneMinder will not run without completing the steps outlined in the README.</p>
</fieldset>
</div><!--END RPM-->
<div id="DEB">
  <fieldset><legend><a name="DEB">Debian/Ubuntu Packages</a></legend>
  <b>Installation guide for stable version</b><br>
  If you are a normal user looking to install a stable version of ZoneMinder, you should follow our comprehensive installation guides available in the online documentation for <a href="https://zoneminder.readthedocs.io/en/latest/installationguide/debian.html">Debian</a> and for <a href="https://zoneminder.readthedocs.io/en/latest/installationguide/ubuntu.html">Ubuntu</a>.

  <br><br>

  <b>Additional information for advanced users and developers</b><br>
  Packages are also available for development versions. Be aware that these packages are created and uploaded manually from time to time. There is no automated nightly build yet.
  If you are looking for the latest master, best is to clone the git repository and build from source. 
  <br> 
  To download and install (and later update) these packages with apt, please add deb https://zmrepo.zoneminder.com/debian/branch distribution/ 
  to /etc/apt/sources.list or a file under /etc/apt/sources.list.d maybe named zoneminder.list.
  <br>
  For example an entry for master snapshot builds on ubuntu would be:
  <br>
  deb https://zmrepo.zoneminder.com/debian/master xenial/
<br><br><br>
The following is a list of available branches:<br><br>
<table>
  <tr><th>Branch Name</th><th>Description</th></tr>
  <tr>
    <td>master</td> 
    <td>Snapshots of master branch from 
      <a href="https://github.com/ZoneMinder/zoneminder">
      https://github.com/ZoneMinder/zoneminder
      </a>
    </td>
  </tr>
  <tr>
    <td>release-1.34</td>
    <td>Stable releases of ZoneMinder 1.34.x
      <a href="https://github.com/ZoneMinder/zoneminder">
      https://github.com/ZoneMinder/zoneminder
      </a>
    </td>
  </tr>
</table>
<br/>
Then we want to import the GPG signature public key. Do:<br/>
<br/>
wget -O - https://zmrepo.zoneminder.com/debian/archive-keyring.gpg | sudo apt-key add -<br/>
<br/>
Then do:<br/>
<br/>
sudo apt-get update<br/>
sudo apt-get install zoneminder<br/>
  </fieldset> 
  <fieldset><legend><a name="IMG">System Images</a></legend>
      <table>
        <tr>
          <th>Filename</th><th>Description</th>
        </tr>
        <tr>
          <td><a href="/ftp/system_images/2020-02-13-raspbian-buster-zoneminder-1.34-0.1.img.bz2">2020-02-13-raspbian-buster-zoneminder-1.34-0.1.img.bz2</a></td>
          <td>
<p>
First release of a raspbian image with ZoneMinder already installed. Based on 2020-02-13-raspbian-buster-lite. <br/>
Please note that I have NOT configured multi-server, as I am assuming we will not be running more than 6 cameras on it.<br/>
This image was built on a pi 3b.  I successfully run 4 720p cameras @10fps on something like it.  You should be able to as well. Please note that the pi does not have a lot of ram for buffers, so your camera's keyframe (or I-frame) interval needs to be low.  Like &lt;10fps.<br/>
This is a stand-alone install, complete with MariaDB, apache and ZoneMinder.<br/>
Please note that the installed ffmpeg libraries appear to have an available &quot;rpi&quot; hwaccel available.  I'm not sure at this time if it has any effect, but to use it you would have to specify rpi as HWAccel in the monitor settings.<br/>
 This image will track 1.34 stable releases from ZMRepo.<br/>
Apache has been configured as a virtualhost, so just point your browser at the pi's IP address (with or without /zm) and it should come up.<br/>
</p>
<p>Standard raspbian install instsructions apply.  dd the image to your sdcard and stick it in your pi.<br/>
bunzip2 2020-02-13-raspbian-buster-zoneminder-1.34-0.1.img.bz2<br/>
sudo dd if=2020-02-13-raspbian-buster-zoneminder-1.34-0.1.img of=/dev/mmcblk0 bs=4M<br/>
 </p>

          </td>
        </tr>
      </table>
  </fieldset>
</div>
</body>
</html>
