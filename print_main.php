<?php
	require_once 'valid.php';
    date_default_timezone_set('Asia/Manila');
    $mydate=getdate(date("U"));
    $date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?>	
<!DOCTYPE html>
<html>

<head>
    <title>Print</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    .row {
        position: relative;
        width: 100%;
    }

    p {
        margin: 0;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    table {
        width:100%;
    }
    td {
        padding-left: 10px;
    }
    th{
        text-align: center;
        padding-left: 10px;
    }

</style>

<body onload="window.print()">
    <div class="row">
        <div style="float: left;
        width: 20%;">
            <div style="text-align: center; font-size: 9px;">
                <b>
                    <p>VIISION</p>
                    <p>MABINI COLLEGES
                </b> SHALL</p>
                <p>cultivate a <b>CULTURE OF</p>
                <p>EXCELLENCE</b> in education.</p>
            </div>
        </div>
        <div style="float: left;
        width: 5%;">
            <div style="margin:5px;">
                <img src="images/mc_logo.png" alt="Mc_Logo" width="65px">
            </div>
        </div>
        <div style="float: left; margin-bottom: 20px;
        width: 50%; text-align: center;">
            <p><b>MABINI COLLEGES, INC</b></p>
            <p><b>HIGH SCHOOL DEPARTMENT</b></p>
            <p>Daet, Camarines Norte</p>
            <br>
            <br>
            <p><b>HIGH SCHOOL MAIN LABORATORY</b></p>
            <p><b><i>(Mabini Colleges Senior High School Building)</i></b></p>
            <br>
            <p><b>Inventory as of <?=$date; ?></b></p>
        </div>
        <div style="float: left;
        width: 25%;text-align: center;">
            <div style="font-size:8.5px;">
                <p><b>MISSION</b></p>
                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp; <b>MABINI COLLEGES</b> provides quality
                    instruction, research and extension service program at all
                    educational levels at its monumental contribution to
                    national and global growth and development.</p>
                <p>CORE VALUES</p>
                <ul style="text-align: left;">
                    <li>God-fearing</li>
                    <li>Nation-loving</li>
                    <li>Earth-caring</li>
                    <li>Law-abiding</li>
                    <li>Productive, and</li>
                    <li>Locally and Globally competitive person.</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <br>
        <br>
        <?php
        $qx_item = $conn->query("SELECT * FROM `category`") or die(mysqli_error());
        while($fs_item = $qx_item->fetch_array()){
            
        ?>
            <p  style="float: left; margin-bottom: 10px;margin-left: 25%;
        width: 50%; text-align: center;  text-transform: uppercase; "><b><?php echo $fs_item['category_name']?></b></p> 
        <table>
            <thead>
                <th>Qunatity</th>
                <th>Items</th>
                <th>Description/Specification</th>
                <th>Condition</th>
                <th >Remark</th>
            </thead>
            <tbody>
                <?php
                    $q_item = $conn->query("SELECT * FROM `item`") or die(mysqli_error());
                    while($f_item = $q_item->fetch_array()){
                    if($f_item['department'] == 'main science laboratory' && $fs_item['category_name'] == $f_item['item_category']){

                ?>
                <tr>
                    <td style="width:100px"><?php echo $f_item['item_quantity']?> <?php echo $f_item['item_type']?></td>
                    <td style="width: 220px; max-width: 220px;"><?php echo $f_item['item_name']?></td>
                    <td style="width: 200px; max-width: 200px;"><?php echo $f_item['item_description']?></td>
                    <td style="width: 200px; max-width: 200px;"><?php echo $f_item['item_condition']?></td>
                    <td style="width: 200px; max-width: 200px;"><?php echo $f_item['item_remark']?></td>
                </tr>
                <?php
                        }
					}
				?>
            </tbody>
        </table>
        <br>
        <?php        
		}
		?>
    </div>
    <br>
    <br>
    <div style="width: 100%;">
    <?php
        $q_temp = $conn->query("SELECT * FROM `template`") or die(mysqli_error());
        while($f_temp = $q_temp->fetch_array()){

    ?>
        <p>Prepared by:</p>
        <div style="margin-left: 70px;max-width: 300px;">
            <p style="text-decoration: underline;font-weight: bold;text-align:center;"><?php echo $f_temp['prepared_by']?></p>
            <p style="text-align:center;text-transform: capitalize;"><?php echo $f_temp['prepared_by_label']?></p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="width: 100%;">
        <p>Inspected by:</p>
        <div style="margin-left: 70px;max-width: 300px;">
            <p style="text-decoration: underline;font-weight: bold;text-align:center;"><?php echo $f_temp['inspected']?></p>
            <p style="text-align:center;text-transform: capitalize;"><?php echo $f_temp['inspected_by_label']?></p>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>