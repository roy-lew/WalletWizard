<?php
include 'config.php';
$admin = new Admin();

$value = $_GET['val'];
$eid = $_GET['e_id'];
$stmt = $admin->ret("SELECT * FROM `user` WHERE `u_contact` = '$value'");

$num = $stmt ->rowCount();
if($num>0){
while ($row =$stmt->fetch(PDO::FETCH_ASSOC)) { ?>


<!--new -->
<div data-tab="tab2" class="tab flex gap-x p-2 group hover:bg-bgray-100 rounded-lg transition-all">
  <div class="border border-bgray-200 rounded-lg p-4 pb-8">
    <div class="flex gap-x">  
      <div class="w-[60px]">
          <span class="item-ico">
                                <svg
                                  width="44"
                                  height="44"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <ellipse
                                    cx="11.7778"
                                    cy="17.5555"
                                    rx="7.77778"
                                    ry="4.44444"
                                    class="path-1"
                                    fill="#1A202C"
                                  />
                                  <circle
                                    class="path-2"
                                    cx="11.7778"
                                    cy="6.44444"
                                    r="4.44444"
                                    fill="#22C55E"
                                  />
                                </svg>
                              </span>
      </div>
      <div class="flex-1">
        <h4
          class="text-lg font-bold text-bgray-900"
          id="availability-label"
        >
        <?php echo $row['u_name'] ?>
        </h4>
        <p
          class="text-base text-bgray-500"
          id="availability-description"
        >
        Email ID: <?php echo $row['u_email']; ?> |  Contact Number: <?php echo $row['u_contact']; ?>
        </p>
      </div>
    </div>
    <br>
    <a href="controller/add_contact.php?u_id=<?php echo $row['u_id']; ?>&e_id=<?php echo $eid; ?>"> <button
          class="text-base w-full text-success-300 font-medium h-12 rounded-md border border-success-300 hover:text-white hover:bg-success-300 transition duration-300 ease-in-out"
        >
        + Add 
        </button></a></div></div>
        
    <div>
    <?php
    }}
    else{ ?>
      <h3>NO MATCH FOUND. Check the Entered number again. </h3>
      <?php  } 



    ?><br></div>