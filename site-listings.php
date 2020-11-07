<?php
include('includes/header.inc.php');  ?>

<div class="site-lisings-heading">
  <div class="container">
    <div class="pt-4 pb-4 row">
      <h1>Soliton Active Sites</h1>
    </div>
  </div>
</div>


<?php
  include("classes/Site.class.php");
  $SiteObject = new Site();
  $SiteList = $SiteObject->GetActiveSites();
  ?>


<div class="site-list-table">
  <div class="container">
    <div class="row">
      <table>
        <tr>
          <th>Site Name</th>
          <th>Last Updated</th>
          <th>Created By</th>
          <th>Support End Date</th>
          <th>        </th>
        </tr>
        <?php
          while ($result = $SiteList->fetch_assoc()) {
            echo "<tr>";
            echo '<td>'.$result['SiteName'].'</td>';
            echo '<td>'.$result['LastUpdated'].'</td>';
            echo '<td>'.$result['CreatorID'].'</td>';
            echo '<td>'.$result['SiteSupportEnd'].'</td>';
            echo '<td>'.'<a href="site.php?SiteID='.$result['SiteID'].'">View</a>'.'</td>';
            echo "</tr>";
          }
        ?>
      </table>
    </div>
  </div>
</div>
<?php
include('includes/footer.inc.php');
?>
