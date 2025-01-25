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

function SelectInstructions(select){
  var selected = select.value;
  document.getElementById('InstText').innerHTML = Instructions[selected];
}

var Instructions = [];
Instructions[0] = ' ';
<?php

$releases = array();

# Define both rhel and fedora releases here, using the release number ONLY.
# This array is all you need to change, as new releases are added and old releases are deprecated.
$releases[] = 8;
$releases[] = 9;
$releases[] = 40;
$releases[] = 41;

$zmrepo_rpms = array();
$zmrepo_rpm = array();
$instructions = array();

foreach ($releases as $release) {
  if ( $release > 30 ) {
    # Find all the zmrepo rpms for the current release, sort them, and select the most recent
    $zmrepo_rpms[$release] = glob("fc/".$release."/x86_64/zmrepo-".$release."-*.noarch.rpm");
    natsort($zmrepo_rpms[$release]);
    $zmrepo_rpm[$release] = basename(end($zmrepo_rpms[$release]));

    # Build the instruction text in php
    $instructions[$release] = '<p><b>Installation instructions for ZoneMinder development rpms on Fedora '.$release.' (x86_64 and aarch64 architectures)</b></p>'.
                              '<div style="border:1px dashed #000"><p><font face=Courier>'.
                              'sudo dnf install --nogpgcheck https://mirrors.rpmfusion.org/free/fedora/rpmfusion-free-release-'.$release.'.noarch.rpm<br>'.
                              'sudo dnf install --nogpgcheck http://zmrepo.zoneminder.com/fc/'.$release.'/x86_64/'.$zmrepo_rpm[$release].'<br>'.
                              'sudo dnf install zoneminder<br>'.
                              'less /usr/share/doc/zoneminder-common/README<br>'.
                              '</font></p></div>';

    # Now echo the instruction text as a javascript variable
    echo "Instructions[".$release."] = '".$instructions[$release]."';".PHP_EOL;;

  } else {
    # Find all the zmrepo rpms for the current release, sort them, and select the most recent
    $zmrepo_rpms[$release] = glob("el/".$release."/x86_64/zmrepo-".$release."-*.noarch.rpm");
    natsort($zmrepo_rpms[$release]);
    $zmrepo_rpm[$release] = basename(end($zmrepo_rpms[$release]));
    $repo = ($release == 8) ? "powertools" : "crb";

    # Build the instruction text in php
    $instructions[$release] = '<p><b>Installation instructions for ZoneMinder development rpms on EL'.$release.' distributions (x86_64 and aarch64 architectures)</b></p>'.
                              '<div style="border:1px dashed #000"><p><font face=Courier>'.
                              'sudo dnf install epel-release<br>'.
                              'sudo dnf install --nogpgcheck https://mirrors.rpmfusion.org/free/el/rpmfusion-free-release-'.$release.'.noarch.rpm<br>'.
                              'sudo dnf install dnf-plugins-core<br>'.
                              'sudo dnf config-manager --set-enabled '.$repo.'<br>'.
                              'sudo dnf install --nogpgcheck http://zmrepo.zoneminder.com/el/'.$release.'/x86_64/'.$zmrepo_rpm[$release].'<br>'.
                              'sudo dnf install zoneminder<br>'.
                              'less /usr/share/doc/zoneminder-*/README<br>'.
                              '</font></p></div>';

    # Now echo the instruction text as a javascript variable
    echo "Instructions[".$release."] = '".$instructions[$release]."';".PHP_EOL;

  }
}

?>

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
  <b>ZONEMINDER RPM RELEASES HAVE MOVED</b><br>
  This site hosts <a href="https://zoneminder.com">ZoneMinder</a> unstable, development rpm packages. If you are looking for stable releases of ZoneMinder, you may find them at <a href="https://rpmfusion.org/">RPM Fusion</a>. Please note that RPM Fusion free is also required for the unstable development rpm packages.
  <br>
  <p>The following distributions are supported:</p>
  <p>
  
  <?php

  foreach ($releases as $release) {
    if ( $release > 30 ) {
      echo '<a href="fc/'.$release.'">F'.$release.'</a> (Fedora '.$release.')<br>'.PHP_EOL;
    } else {
      echo '<a href="el/'.$release.'">EL'.$release.'</a> (RHEL compatible)<br>'.PHP_EOL;
    }
  }

  ?>
  </p>
  <br>
  <form autocomplete="off">
    Select your Distro to Display the Appropriate Installation Instructions:
    <select onChange='SelectInstructions(this);'>
      <option value="0">Choose your Distro</option>
      <?php

        foreach ($releases as $release) {
          if ( $release > 30 ) {
            echo '<option value="'.$release.'">F'.$release.' Fedora '.$release.'</option>'.PHP_EOL;
          } else {
            echo '<option value="'.$release.'">EL'.$release.' RHEL '.$release.' Compatible</option>'.PHP_EOL;
          }
        }

      ?>
    </select>
  </form>
  <br>

  <!-- Div populated by Javascript -->
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
  <br/> 
  To download and install (and later update) these packages with apt, please add deb https://zmrepo.zoneminder.com/debian/branch distribution/ 
  to /etc/apt/sources.list or a file under /etc/apt/sources.list.d maybe named zoneminder.list.
  <br/>
  For example an entry for master snapshot builds on ubuntu would be:<br/>
  <br/>
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
    <td>release-1.36</td>
    <td>Stable releases of ZoneMinder 1.36.x
      <a href="https://github.com/ZoneMinder/zoneminder">
      https://github.com/ZoneMinder/zoneminder
      </a>
    </td>
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
wget -O - https://zmrepo.zoneminder.com/debian/archive-keyring.gpg | sudo tee /etc/apt/trusted.gpg.d/zmrepo.asc<br/>
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
