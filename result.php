<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Oct12.css">
<meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Displaying data from database
    </title>
    <style>
         /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.home-section nav{
  display: flex;
  justify-content: space-between;
  height: 80px;
  background:powderblue;
  display: flex;
  align-items: center;
  position: fixed;
  width: calc(100% - 240px);
  left: 240px;
  z-index: 100;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.5s ease;
}
.sidebar.active ~ .home-section nav{
  left: 60px;
  width: calc(100% - 60px);
}
.home-section nav .sidebar-button{
  display: flex;
  align-items: center;
  font-size: 24px;
  font-weight: 500;
}
nav .sidebar-button i{
  font-size: 35px;
  margin-right: 10px;
}

.home-section nav .profile-details{
  display: flex;
  align-items: center;
  background: #F5F6FA;
  border: 2px solid #EFEEF1;
  border-radius: 6px;
  height: 50px;
  min-width: 190px;
  padding: 0 15px 0 2px;
}
nav .profile-details img{
  height: 40px;
  width: 40px;
  border-radius: 6px;
  object-fit: cover;
}
nav .profile-details .admin_name{
  font-size: 15px;
  font-weight: 500;
  color: #333;
  margin: 0 10px;
  white-space: nowrap;
}
nav .profile-details i{
  font-size: 25px;
  color: #333;
}
.home-section .home-content{
  position: relative;
  padding-top: 104px;
}
.home-content .overview-boxes{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 0 20px;
  margin-bottom: 26px;
}
.overview-boxes .box{
  /* display: flex; */
  margin-top: 70px;
  /* align-items: center; */
  /* justify-content: center; */
  text-align: center;
  width: calc(100% / 4 - 50px);
  background: #fff;
  padding: 150px 0px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.overview-boxes .box-topic{
  font-size: 30px;
  font-weight: 500;
  text-align: center;
  align: center;
}
.home-content .box .number{
  display: inline-block;
  font-size: 350px;
  margin-top: -6px;
  font-weight: 500;
}

.home-content .box .indicator .text{
  font-size: 30px;
}

</style>

</head>
<body>

  <section class="home-section">
    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Soham</div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text">
                  
              <?php
        $conn = mysqli_connect("localhost", "root" ,"","votedb");
        $sql ="SELECT * FROM  candidatetb ";
        $result = $conn-> query($sql);

        if ($result->num_rows >0){
            while($row = $result-> fetch_assoc()){
               echo " <tr><td>"  . $row["kitten1"] . "</td><td> ";
            }
        }
        else{
            echo"no Results";
        }
        $conn-> close();
        ?>
                
                </span>
            </div>
          </div>
        </div>
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nikita</div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text">
                 
              <?php
        $conn = mysqli_connect("localhost", "root" ,"","votedb");
        $sql ="SELECT * FROM  candidatetb ";
        $result = $conn-> query($sql);

        if ($result->num_rows >0){
            while($row = $result-> fetch_assoc()){
               echo " <tr><td>"  . $row["kitten2"] . "</td><td>";
            }
        }
        else{
            echo"no Results";
        }
        $conn-> close();
        ?>

                </span>
            </div>
          </div>
         </div>
        
         <div class="box">
          <div class="right-side">
            <div class="box-topic">Vedant</div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text">
                  
              <?php
        $conn = mysqli_connect("localhost", "root" ,"","votedb");
        $sql ="SELECT * FROM  candidatetb ";
        $result = $conn-> query($sql);

        if ($result->num_rows >0){
            while($row = $result-> fetch_assoc()){
               echo " <tr><td>"  . $row["kitten3"] . "</td><td>";
            }
        }
        else{
            echo"no Results";
        }
        $conn-> close();
        ?>            
          
        </span>
            </div>
          </div>
       </div>
    </div>
   </body>