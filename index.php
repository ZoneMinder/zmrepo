<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="http://www.zoneminder.com/sites/zoneminder.com/files/favicon.ico" type="image/vnd.microsoft.icon" />
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
$zmrepo_f26_rpms = glob("f/26/i386/zmrepo-26-*.noarch.rpm");
$zmrepo_f27_rpms = glob("f/27/i386/zmrepo-27-*.noarch.rpm");

natsort($zmrepo_el6_rpms);
natsort($zmrepo_el7_rpms);
natsort($zmrepo_f26_rpms);
natsort($zmrepo_f27_rpms);

$zmrepo_el6_rpm = basename(end($zmrepo_el6_rpms));
$zmrepo_el7_rpm = basename(end($zmrepo_el7_rpms));
$zmrepo_f26_rpm = basename(end($zmrepo_f26_rpms));
$zmrepo_f27_rpm = basename(end($zmrepo_f27_rpms));

?>

var Instructions = new Array()
Instructions[0] = ' '

Instructions[1] = '<p><b>Installation instructions for EL6 distributions (i386 or x86_64 architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/6/i386/<?php echo $zmrepo_el6_rpm; ?><br>' +
						'sudo yum install --nogpgcheck <?php echo $zmrepo_el6_rpm; ?><br>' +
						'sudo yum install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README.Redhat6<br></font></p></div>'

Instructions[2] = '<p><b>Installation instructions for EL7 distributions (x86_64 architectures only)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/el/7/x86_64/<?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo yum install --nogpgcheck <?php echo $zmrepo_el7_rpm; ?><br>' +
						'sudo yum install zoneminder<br>' +
						'less /usr/share/doc/zoneminder-*/README.Redhat7<br></font></p></div>'

Instructions[3] = '<p><b>Installation instructions for Fedora 26 (i386, x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/26/i386/<?php echo $zmrepo_f26_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f26_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder/README.Fedora<br></font></p></div>'
 
Instructions[4] = '<p><b>Installation instructions for Fedora 27 (i386, x86_64, or armv7fl architectures)</b></p>' +
						'<div style="border:1px dashed #000"><p><font face=Courier>wget http://zmrepo.zoneminder.com/f/27/i386/<?php echo $zmrepo_f27_rpm; ?><br>' +
						'sudo dnf install --nogpgcheck <?php echo $zmrepo_f27_rpm; ?><br>' +
						'sudo dnf install zoneminder<br>' +
						'less /usr/share/doc/zoneminder/README.Fedora<br></font></p></div>'
 
function SelectInstructions(select){
	selected = select.selectedIndex;
	document.getElementById('InstText').innerHTML = Instructions[selected];
}
</script>

</head>
<body bgcolor="#c9c9c9">
<p><img src="ZoneMinderSmall.gif" style="float: left; padding-right: 50px;" alt="">
<font size="5" style="font-size: 18pt" color="#336699"><b>Welcome to ZMREPO<br>
A <a href="http://www.zoneminder.com/">ZoneMinder</a> RPM Repository</b></font></p>
<br>
<br>
<b>ZONEMINDER RELEASES HAVE MOVED</b><br>
This site hosts ZoneMinder unstable, development rpm packages. If you are looking for stable releases of ZoneMinder, you may find them at <a href="https://rpmfusion.org/">RPM Fusion</a>.

<b>SUPPORT FOR ZONEMINDER ON EL6 HAS REACHED END OF LIFE</b><br>
New ZoneMinder pacakges will no longer be built for the EL6 distro, which includes rhel6, centos 6, scientific linux 6, and other clones. We recommend you upgrade to EL7 or Fedora to remain up to date with the latest ZoneMinder release.
Alternatively, you may continue to use the ZoneMinder 1.30.4 release and 1.31.1 development packages hosted on this site. These packages will remain hosted here indefinitely.

<br>
<p>The following distributions are supported:</p>
<p>
<a href="el/6">EL6</a> (CentOS/RHEL/SL)<br>
<a href="el/7">EL7</a> (CentOS/RHEL/SL)<br>
<a href="f/26">F26</a> (Fedora 26)<br>
<a href="f/27">F27</a> (Fedora 27)<br>
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
			26
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/26/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/26/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/26/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/26/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/26/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/26/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/26/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/testing/26/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			27
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			release
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/27/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/27/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/27/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/27/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			testing
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/27/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/27/i386">i386</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			<a href="f/testing/27/x86_64">x86_64</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; padding: 0.04in">
			<a href="f/testing/27/armhfp">armhfp</a>
		</td>
	</tr>
	<tr align="center" valign="center">
		<td rowspan="4" style="font-weight: bold; border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			CentOS/RHEL/SL
		</td>
		<td rowspan="2" style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			6
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
			<a href="el/7/SRPMS">source</a>
		</td>
		<td style="border-top: none; border-bottom: 1px solid black; border-left: 1px solid black; border-right: none; padding: 0.04in">
			n/a
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
<p>Before starting, first verify you have a clean system.<br>
Remove or disable any third party repositories you were previously using.</p>
<br>
<form autocomplete="off">
Select your Distro to Display the Appropriate Installation Instructions: <select onChange='SelectInstructions(this);'>
<option value="0">Choose your Distro</option>
<option value="1">EL6 CentOS/RHEL/SL 6</option>
<option value="2">EL7 CentOS/RHEL/SL 7</option>
<option value="3">F26 Fedora 26</option>
<option value="4">F27 Fedora 27</option>
</select>
</form>
<br>
<div id="InstText"></div>

<p>Once ZoneMinder has been installed, it is critically important that you read the README file under /usr/share/doc/zoneminder.  ZoneMinder will not run without completing the steps outlined in the README.</p>
<p>Nightly builds are now available in the testing repo. To enable the testing repo, first install ZoneMinder using the normal instructions, then follow the instructions <a href="testing.html">shown here</a>.</p>
</body>
</html>
