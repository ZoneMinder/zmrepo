<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
<title>ZMREPO - A ZoneMinder RPM Repository</title>
<meta name="generator" content="Bluefish 2.2.6" >
<meta name="author" content="Andy Bauer" >
<meta name="date" content="2015-05-24T22:48:18-0500" >
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">

<script type="text/javascript">

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
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/30/x86_64/<?php echo $zmrepo_f30_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f30_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-common/README<br></font></p></div>'
 
Instructions[4] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora 31 (x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/31/x86_64/<?php echo $zmrepo_f31_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f31_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-common/README<br></font></p></div>'
 
function SelectInstructions(select){
	selected = select.selectedIndex;
	document.getElementById('InstText').innerHTML = Instructions[selected];
}
</script>
<style>
  table {
    text-align: center;
    border-collapse: collapse;
    border-spacing: 0;
  }
  td,th {
    border: 1px solid black; 
    padding: 0.04in;
    text-align: left;
  }
</style>
</head>
<body bgcolor="#c9c9c9" style="padding-left: 200px;">
  <p><img src="ZoneMinderSmall.gif" style="float: left; margin-left:-200px;" alt="">
  <font size="5" style="font-size: 18pt" color="#336699"><b>Welcome to ZMREPO<br>
  A <a href="http://www.zoneminder.com/">ZoneMinder</a> Repository for RPM and DEB packages</b></font></p>
<div id="RPM">
<fieldset><legend>RPM</legend>
<br>
<br>
<b>ZONEMINDER RELEASES HAVE MOVED</b><br>
This site hosts ZoneMinder unstable, development rpm packages. If you are looking for stable releases of ZoneMinder, you may find them at <a href="https://rpmfusion.org/">RPM Fusion</a>.
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
		<td colspan="3" style="border: 1px solid black; padding: 0.04in">
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
  <fieldset><legend>Debian/Ubuntu Packages</legend>
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
    <td>release</td> 
    <td>Stable releases of ZoneMinder
      <a href="https://github.com/ZoneMinder/zoneminder">
      https://github.com/ZoneMinder/zoneminder
      </a>
    </td>
  </tr>
  <tr>
    <td>storageareas</td>
    <td>Isaac's experimental development branch from 
<a href="https://github.com/ConnorTechnology/zoneminder">https://github.com/ConnorTechnology/zoneminder</a>
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
</div>
</body>
</html>
