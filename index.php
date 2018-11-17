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

$zmrepo_el6_rpms = glob("el/6/i386/zmrepo-6-*.noarch.rpm");
$zmrepo_el7_rpms = glob("el/7/x86_64/zmrepo-7-*.noarch.rpm");
$zmrepo_f28_rpms = glob("f/29/i386/zmrepo-28-*.noarch.rpm");
$zmrepo_f29_rpms = glob("f/29/i386/zmrepo-29-*.noarch.rpm");

natsort($zmrepo_el6_rpms);
natsort($zmrepo_el7_rpms);
natsort($zmrepo_f28_rpms);
natsort($zmrepo_f29_rpms);

$zmrepo_el6_rpm = basename(end($zmrepo_el6_rpms));
$zmrepo_el7_rpm = basename(end($zmrepo_el7_rpms));
$zmrepo_f28_rpm = basename(end($zmrepo_f28_rpms));
$zmrepo_f29_rpm = basename(end($zmrepo_f29_rpms));

?>

var Instructions = new Array()
Instructions[0] = ' '

Instructions[1] = '<p><b>Installation instructions for ZoneMinder release rpms on EL6 distributions (i386 or x86_64 architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/6/i386/<?php echo $zmrepo_el6_rpm; ?><br>' +
						'sudo yum install --nogpgcheck <?php echo $zmrepo_el6_rpm; ?><br>' +
						'sudo yum install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README.Redhat6<br></font></p></div>'

Instructions[2] = '<p><b>Installation instructions for ZoneMinder development rpms on EL7 distributions (x86_64 architectures only)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/7/x86_64/<?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo yum install --nogpgcheck <?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo sed -i \'0,/enabled=0/{s/enabled=0/enabled=1/\}\' /etc/yum.repos.d/zmrepo-centos-testing.repo<br>' +
						'sudo yum install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README<br></font></p></div>'

Instructions[3] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora 28 (i386, x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/29/i386/<?php echo $zmrepo_f28_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f28_rpm; ?><br>' +
						'sudo sed -i \'0,/enabled=0/{s/enabled=0/enabled=1/}\' /etc/yum.repos.d/zmrepo-fedora-testing.repo<br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder/README<br></font></p></div>'
 
Instructions[4] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora 29 (i386, x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/29/i386/<?php echo $zmrepo_f29_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f29_rpm; ?><br>' +
						'sudo sed -i \'0,/enabled=0/{s/enabled=0/enabled=1/}\' /etc/yum.repos.d/zmrepo-fedora-testing.repo<br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder/README<br></font></p></div>'
 
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
<p>
<b>SUPPORT FOR ZONEMINDER ON EL6 HAS REACHED END OF LIFE</b><br>
New ZoneMinder packages will no longer be built for the EL6 distro, which includes rhel 6, centos 6, scientific linux 6, and other clones. We recommend you upgrade to EL7 or Fedora to remain up to date with the latest ZoneMinder release.
Alternatively, you may continue to use the ZoneMinder 1.30.4 release and 1.31.1 development packages hosted on this site. These packages will remain hosted here indefinitely.
</p>
<br>
<p>The following distributions are supported:</p>
<p>
<a href="el/7">EL7</a> (CentOS/RHEL/SL)<br>
<a href="f/28">F28</a> (Fedora 28)<br>
<a href="f/29">F29</a> (Fedora 29)<br>
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
		<td style="border-top: 1px solid black; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			Repository
		</td>
		<td colspan="4" style="border: 1px solid black; padding: 0.04in">
			Arch
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="4" style="font-weight: bold; border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			Fedora
		</td>
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			28
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/28/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/28/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/28/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/testing/28/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			29
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/29/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/29/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/29/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/testing/29/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="4" style="font-weight: bold; border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			CentOS/RHEL/SL
		</td>
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			6 (EOL)
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/6/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/6/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/6/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/testing/6/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/testing/6/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/testing/6/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			7
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			n/a
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/testing/7/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="el/testing/7/x86_64">x86_64</a>
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
<option value="1">EL6 CentOS/RHEL/SL 6</option>
<option value="2">EL7 CentOS/RHEL/SL 7</option>
<option value="3">F28 Fedora 28</option>
<option value="4">F29 Fedora 29</option>
</select>
</form>
<br>
<div id="InstText"></div>

<p>Once ZoneMinder has been installed, it is critically important that you read the README file under /usr/share/doc/zoneminder.  ZoneMinder will not run without completing the steps outlined in the README.</p>
</fieldset>
</div><!--END RPM-->
<div id="DEB">
  <fieldset><legend>Debian/Ubuntu Packages</legend>
  Please add deb https://zmrepo.zoneminder.com/debian/branch distribution/ to /etc/apt/sources.list or a file under /etc/apt/sources.list.d maybe named zoneminder.list. For example an entry for master snapshot builds on ubuntu would be:<br/><br/>
  deb https://zmrepo.zoneminder.com/debian/master xenial/<br/><br/>
<br/>
The following is a list of available branches:<br/><br/>
<table>
  <tr><th>Branch Name</th><th>Description</th></tr>
  <tr>
    <td>master</td> 
    <td>Snapshots of current master branch from 
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
