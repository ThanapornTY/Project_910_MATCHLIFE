<style>
	/*****************************/
/* Styling Menu of the Page */
/*****************************/

* {
	font-family: 'Kanit', sans-serif;
	margin: 0;
	padding: 0;
	text-decoration: none;
	box-sizing: border-box;
	outline: none; border: none;

}

/*****************************/
/* หน้าหลัก -> รายละเดียกเว็บไซต์ และน้องอาสา */
/*****************************/

.grid-container{
    display: flex;
    justify-content: space-between;
	
    align-items: center;
   /* margin: 0px 0;*/
}

.container-about{
	max-width: 1250px;
	margin-top: 30px; 
	margin-left:150px;
}

.grid-container .Asa img{
    width: 500px;
    height: 500px;
    flex-basis: 40%;
    position: relative;
    margin-left: 100px;
}


.grid-container .item1 {
    flex-basis: 50%;
    position: relative;
    margin-right: 100px;
}


/* ***********Pop-up หน้า Volunteer_DetailPage************** */
*, *::after, *::before {
  box-sizing: border-box;
}

.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  transition: 200ms ease-in-out;
  border-radius: 10px;
  z-index: 10;
  background-color: white;
  width: 500px;
  max-width: 80%;
}

.modal.active {
  transform: translate(-50%, -50%) scale(1);
}

.modal-header {
  padding: 10px 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid black;
}

.modal-header .title {
  font-size: 1.25rem;
  font-weight: bold;
}

.modal-header .close-button {
  cursor: pointer;
  border: none;
  outline: none;
  background: none;
  font-size: 1.25rem;
  font-weight: bold;
}

.modal-body {
  padding: 10px 15px;
  
}

#overlay {
  position: fixed;
  opacity: 0;
  transition: 200ms ease-in-out;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, .5);
  pointer-events: none;
}

#overlay.active {
  opacity: 1;
  pointer-events: all;
}

.scroll-bar{
	height: 100%;
	width: 100%;
	overflow-x: auto;
}



/* ************************* */

้html{
	font-size: 55%;
    top: 0;
    left: 0;
    right: 0;
	overflow-x: hidden;
	scroll-behavior: smooth;
	scroll-padding-top: 6rem;
}

/*****************************/
/* ตัวเลือกหน้า Volun */
/*****************************/

.filterDiv {
  float:inline-end;
  background-color: #fff;
  color: #000;
  width: 100%;
  min-width: 20%;
  margin: 2px;
  display: none;
  border-radius: 20px;
  margin-bottom: 15px;
}

.show {
  display: block;
}

.container {
  /*margin-top: 20px;*/
  overflow: hidden;
}

/* Style the buttons */
.btn-filter {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #fff;
  cursor: pointer;
  border-radius: 20px;
}

.btn-filter:hover {
  background-color: #ddd;
}

.btn-filter.actives {
  background-color: orange;
  color: white;
}

.li-sub p {
  margin: 0;
}
.li-img {
  display: table-cell;
  vertical-align: middle;
  width: 30%;
  padding-right: 1em;
}
.li-img img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 20px 0px 0px 20px ;
  
}
.li-text {
  display: table-cell;
  vertical-align: middle;
  width: 70%;
}
.li-head {
  margin: 0px;
  font-size: medium;
}
.li-sub {
  margin: 0;
}

.notfound{
	text-align: center;
	margin-top: 30px;
}

.flex-con{
	display: table-cell;
  	vertical-align: middle;
	  width: 70%;
}

  

/*****************************/
/* Styling Banner Area */
/*****************************/

/*Auto navigation slide*/
body{
	margin: 0;
	padding: 0;
	height: 100vh;
	justify-content: center;
	align-items: center;
	background-color: #efefef;
}

.banner-area .banner-slider{
	margin-top: 60px;
	/*ปรับขนาด branner*/
	width: 1520px;
	height: 500px;
	/*border-radius: 10px;*/
	overflow:hidden;

}

.slides{
	width: 500%;
	height: 500px;
	display: flex;
}

.slides input{
	display: none;
	 
}

.slide{
	width: 20%;
	transition: 2s;
}

.slide img{
	/*ขนาดรูป*/
	width: 1535px;
	height: 500px;
}

/*Manual navigation slide*/

.navigation-manual{
	position: absolute;
	width: 1535px;
	margin-top: -40px;
	display: flex;
	justify-content: center;

}

.manual-btn{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	transition: 1s;
}

.manual-btn:not(:last-child){
	margin-right: 40px;
}

.manual-btn:hover{
	background: white;
}

#radio1:checked ~ .first{
	margin-left: 0;
}

#radio2:checked ~ .first{
	margin-left: -20%;
}

#radio3:checked ~ .first{
	margin-left: -40%;
}

#radio4:checked ~ .first{
	margin-left: -60%;
}

/*Auto navigation slide*/
.navigation-auto{
	position: absolute;
	display: flex;
	width: 1535px;
	margin-top: 460px;
	justify-content: center;
}

.navigation-auto div{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	transition: 1s;
}

.navigation-auto div:not(:last-child){
	margin-right: 40px;
}

/*ทำให้จุดมีพื้นหลัง*/
#radio1:checked ~ .navigation-auto .auto-btn1{
	background: white;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
	background: white;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
	background: white;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
	background: white;
}

.banner-area2{
	/*ปรับขนาด*/
	width: 1535;
	height: 677.5px;
	/*border-radius: 10px;
	overflow: hidden;*/
	background-color: orange;
}
/**/
.but-1 {
	width: 140px;
	height: 45px;
	font-size: medium;
	border-radius: 20px;
	padding: 8px 8px;
	outline: none;
	margin-top: 20px;
	background-color: orange;
}

.but-1:hover{
	text-decoration: none;
	padding: 6px ;
	color: orange;
	background-color: white;
	border-right:2px solid;
	border-top:2px solid;
	border-left:2px solid;
	border-bottom:2px solid;
	border-radius: 20px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}




/*หน้าหา ขั้นตอนการใช้งาน น้องอาสา*/
.hot_to {
	margin-top: 30px;
	margin-left: 100px;
	margin-right: 100px;
	

}

.hot_to .bg-1{
	/*background-color: #fff;*/
	border-radius: 20px;
	height: auto;
	width: 1315px;
}
.hot_to img{
	border-radius: 20px;
	width: 1315px;
	
}

.hot_to .bg-1 .content-1 h2{
	text-align: center;
	padding-top: 20px;

}

.hot_to .bg-1 .content-1 .grid-howto{
	display: grid;
	grid-template-columns: repeat(3,1.5fr);
	text-align: center;
	margin-top: 10px;
	justify-content: center;
	margin-left: 10px;
	margin-right: 50px;
	align-content: center;
	
}



/*****************************/
/* หน้าหลัก -> ประชาสัมพันธ์ */
/*****************************/

.activi{
	margin-top: 50px;
	margin-left: 250px;
	margin-right: 100px;
}

/*เปลี่ยนสีปุ่ม */
.swiper {
	width: 70%;
	--swiper-navigation-color: #ffa500;
	--swiper-pagination-color: #ffa500;
 }
.activi{
	display: grid;
	grid-template-columns: repeat(2,0fr);
	text-align: left;
	margin-top: 0px;
	justify-content: center;
	margin-left: 100px;
	align-content: center;
}

.header-activi{
	display: grid;
	grid-template-columns: repeat(2,1.5fr);
	text-align: left;
	margin-top: 0px;
	justify-content: center;
	margin-left: 100px;
	align-content: center;
 }

.header-activi a{
	text-decoration: none;
	color: #000000;
	margin-top: 10px;
	width: 150px;
	margin-left: 550px;
}

.header-activi a:hover{
	color: #cc7a00;
}

.swiper {
	width: 1315px;
	height: 400px;
	margin-top: 30px;
	margin-bottom: 30px;
}

.swiper-slide {
	text-align: center;
	border-radius: 20px;
	font-size: 18px;
	background: #fff;
	display: flex;
	flex-direction: column;
	align-items: center;
	/*padding: 10px 20px;*/
}

.swiper-slide h3{
	margin: 0px;
}

.swiper-slide p
{
	font-size: 15px;
	padding: 15px;
}

.swiper-slide img {
	margin-bottom: 15px;
	display: block;
	width: 420px;
	height: 200px;
	border-radius: 20px 20px 0px 0px ;
	max-width: 100%;
	object-fit: cover;
}

/* css หน้า Volunteer_Page.html*/

.test1{
	margin-top: 60px;
	/*background-color: #ffa500;*/
	max-width: 1518.7px;
	height: 500px;
}

.test1 h1{
	justify-content: center;
	padding-top: 220px;
	text-align: center;
}



/*****************************/
/* Popup login */
/*****************************/
.sub-menu-wrap{
	position: absolute;
	top: 100%;
	right: 3%;
	width: 320px;
	/*ให้น้องมาอยู่ข้างบน*/
	z-index: 2;
	max-height: 0px;
	overflow: hidden;
	transition: max-height 0.5S;
}

.sub-menu-wrap.open-menu{
	max-height: 400px;
}

.sub-login{
	border-radius: 20px;
	background: #fff;
	padding: 20px;
	margin: 10px;
}

.user-info{
	display: flex;
	align-items: center;
}

.sub-menu hr {
	border: 0;
	height: 1px;
	width: 100%;
	background: #ccc;
	margin: 15px 0 10px;
}

.sub-menu-link{
	display: flex;
	align-items: center;
	text-decoration: none;
	color: #525252;
	margin: 12px 2px;
}

.sub-menu-link p{
	width: 100%;
	margin-left: 15px;
	transition: transform 0.5s;
}

.sub-menu-link span{
	width: 40px;
	border-radius: 50%;
	padding: 8px;
	transition: transform 0.5s;
	
}


.sub-menu-link:hover span{
	transform: translateX(5px);
}

.sub-menu-link:hover p{
	font-weight: 600;
	transform: translateX(5px);
}

/*****************************/
/* ติดต่อ -> ช่องทางการติดต่v */
/*****************************/

.grid-Asa{
    display: flex;
    justify-content: space-between;
    align-items: center;
   /* margin: 0px 0;*/
}

/*แมพ*/
.grid-Asa .fb-pg{
	/*background: #ffa500;*/
    width: 350px;
    height: 400px;
    flex-basis: 40%;
	align-items: center;
    position: relative;
	margin-top:50px;
    margin-right: -30px;
}

/*ตัวหนังสือ*/
.grid-Asa .DetalAsa_con {
	width: 300px;
    flex-basis: 45%;
    position: relative;
    margin-left: 100px;
}

.map-pugin iframe{
    width: 1310px;
    height: 350px;
	margin-left: 100px;
	margin-top: 20px;
}




/*****************************/
/* หน้าจิตอาสา */
/*****************************/

.text-head{
	margin-top: 60px;
}

.text-head h1{
	text-align: center;
	padding-top: 50px;
}

/*ค้นหา css*/
.search_wrap {
	width: 600px;
	margin: 40px auto;
	justify-content: center;
	align-items: center;
	
}

.search_wrap .search_box{
	position: relative;
	width: 500px;
	height: 60px;
}
.search_wrap .search_box .search_input {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	padding: 10px 20px;
	border-radius: 3px;
	font-size: 18px;
	padding-right: 80px;
	border-radius: 50px;
}

.search_wrap .search_box .btn{
	position: absolute;
	top: 0;
	right: 0;
	width: 60px;
	height: 100%;
	background: #ffa500;
	z-index: 1;
	border-radius: 50px;
	cursor: pointer;
}

.search_wrap .search_box .closeBtn{
	position: absolute;
	top: 0;
	right: 55px;
	width: 60px;
	height: 100%;
	z-index: 1;
	cursor: pointer;
}

.search_wrap .search_box .btn:hover{
	background: #ffb731;
}

.search_wrap .search_box .btn.btn_search .material-symbols-outlined{
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #000000;
	font-size: 30px;
}

.search_wrap .search_box .closeBtn .material-symbols-outlined{
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #000000;
	font-size: 25px;
}

.myBtnContainers {
	justify-content: center;
}



/*****************************/
/* หน้าจิตอาสา -> รายละเอียดงานจิตอาสา */
/*****************************/


.grid-detail{
    display: flex;
    justify-content: space-between;
    /*align-items: center;*/
   /* margin: 0px 0;*/
}



/*ตัวหนังสือ*/
.grid-detail .Detail_Volunteer {
	width: 100px;
    flex-basis: 40%;
    position: relative;
	text-align: top;
    margin-right: 90px;
}

.grid-detail .Detail_Volunteer h2{
	color: #000000;
	/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
}


/*------------status button-------------*/
.status .status-free {
	background: rgb(183, 212, 139);
	width: 60px;
	height: 30px;
	border-radius: 20px;
}
.status .status-free p{
	text-align: center;
	padding: 3px;
}

.status .status-busy {
	background: #FF4B4B;
	width: 60px;
	height: 30px;
	border-radius: 20px;
}
.status .status-busy p{
	text-align: center;
	padding: 3px;
}
/*----------------------------------*/

.grid-detail .Detail_Volunteer .status .status-free{
	margin-top: 10px;
}

.grid-detail .Detail_Volunteer .button-detail{
	/*display: flex;
	flex-direction: row;*/

	display: grid;
	grid: 120px / auto auto;
  	grid-gap: 20px;
  	width: 300px;
	margin-top: 20px;
}

.area-detail {
	margin-top: 80px;
}

.Name_Volunteer{
	padding: 20px;
	margin-left: 95px;
}


/*****************************/
/* หน้าจิตอาสา -> ฟอร์มสมัครจิตอาสา */
/*****************************/


.area-detail-form {
    display: grid;
    justify-content: space-between;
	padding: 60px;
	width: 500px;
	margin-top: 20px;
}



/*ตัวหนังสือ*/
.area-detail-form .Detail_Volunteer-form {
	width: 450px;
    position: relative;
	text-align: top;
	margin-top: 30px;
    margin-left: 120px;
}

.area-detail-form .grid-detail .grid-form input{
	color: #ccc;
}

.grid-detail .Detail_Volunteer-form h2{
	color: #000000;
	/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
}

/*พื้นที่กรอกฟอร์ม*/
.grid-form{
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
	border-radius: 20px;
	width: 600px;
	margin-top: 30px;
	height: auto;
	margin-left: 100px;
}

.grid-form form{
	margin: 30px;
	
}

.info input:hover,  .info textarea:hover {
	border: 1px solid transparent;
	box-shadow: 0 0 3px 0 #cc7a00;
	color: #cc7a00;
}

.testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .area-detail-form form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
	  border-radius: 20px;
		width: 600px;
		margin-top: 20px;
		height: auto;
		margin-left: 100px;
      box-shadow: 0 0 8px  #cc7a00; 
      }

      .area-detail-form input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 4%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .area-detail-form .grid-detail .testbox button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .area-detail-form .grid-detail .testbox  button:hover {
      background: #ff9800;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
	}


/*****************************/
/* หน้าประวัติการทำจิตอาสา */
/*****************************/

.bar-NameSeach{
	display: grid;
	grid: 120px / auto auto;
  	grid-gap: 50px;
    justify-content: space-between;
	
	/*width: 500px;*/
}

.area-detail .bar-NameSeach .search-form{
	margin-right: 130px;
}

.list-container-Volunteer{
	display: grid;
	grid: auto / 825px auto;
	
}

.lists-Volunteer{
	background: #fff;
	display: grid;
	grid: 150px / 320px auto;
  	grid-gap: 0px;
	margin-left: 120px;
	margin-top: 20px;
	border-radius: 20px;
	width: 800px;
	height: 245px;
}
/*
.lists-Volunteer .img-Volunteer img{
	width: 400px;
	height: 245px;
	border-radius: 20px 0px 0px 20px ;
}*/



/*****************************/
/* Drop-down Profile Menu */
/*****************************/
.user-pic{
	width: 40px;
	border-radius: 50%;
	cursor: pointer;
	justify-content: center;
}
/*drop-down user*/
.sub-menu-wrap{
	position: absolute;
	top: 100%;
	right: 3%;
	width: 320px;
	/*ให้น้องมาอยู่ข้างบน*/
	z-index: 2;
	max-height: 0px;
	overflow: hidden;
	transition: max-height 0.5S;
}

.sub-menu-wrap.open-menu{
	max-height: 400px;
}

.sub-menu{
	border-radius: 20px;
	background: #fff;
	padding: 20px;
	margin: 10px;
}

.user-info{
	display: flex;
	align-items: center;
}

.user-info img {
	width: 60px;
	border-radius: 50%;
	margin-right: 15px;
}

.sub-menu hr {
	border: 0;
	height: 1px;
	width: 100%;
	background: #ccc;
	margin: 15px 0 10px;
}

.sub-menu-link{
	display: flex;
	align-items: center;
	text-decoration: none;
	color: #525252;
	margin: 12px 2px;
}

.sub-menu-link p{
	width: 100%;
	margin-left: 15px;
	transition: transform 0.5s;
}

.sub-menu-link span{
	width: 40px;
	border-radius: 50%;
	padding: 8px;
	transition: transform 0.5s;
	
}


.sub-menu-link:hover span{
	transform: translateX(5px);
}

.sub-menu-link:hover p{
	font-weight: 600;
	transform: translateX(5px);
}

/*สถานะ หน้าlist Volunteer*/
.show-status{
	position: absolute;
	margin: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
	border-radius: 20px;
}


.myBtnContainers{
	justify-content: center;
	text-align: center;

}


/*****************************/
/*ประชาสัมพันธ์ Message */
/*****************************/
.container{
	margin-left: 100px;
	margin-right: 100px;
	
}

.list-card{
	display: grid;
	grid: auto / 300px auto;
	height: auto;
	grid-template-columns: auto auto auto auto;
}

.list-card .card
{
	text-align: center;
	border-radius: 20px;
	font-size: 18px;
	background-color: #fff;
	display: flex;
	margin-top: 40px;
	flex-direction: column;
	align-items: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.list-card .card-body{
	margin: 20px;
}

.list-card img
{
	margin-bottom: 15px;
	display: block;
	width: 420px;
	border-radius: 20px 20px 0px 0px ;
	height: 200px;
	object-fit: cover;
	max-width: 100%;
}

/*****************************/
/*ประชาสัมพันธ์ Message_DetailPage */
/*****************************/

.area-detail .date-message{
	margin-left: 115px;
	display: flex;
	margin-top: -10px;
	margin-bottom: 20px;
}

.area-detail .date-message span{
	margin-right: 10px;
	

}


/*****************************/
/*หน้า Sign in_Page */
/*****************************/
.detail-form{
    display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 10%;
}

.container-form h1{
	text-align: center;
	margin: 50px;
}

.testbox {
	display: flex;
	justify-content: center;
	align-items: center;
	height: inherit;
	padding: 20px;
	}
	.detail-form form {
	width: 100%;
	padding: 20px;
	border-radius: 6px;
	background: #fff;
	border-radius: 20px;
	  width: 600px;
	  margin-top: 20px;
	  height: auto;
	  margin-left: 100px;
	box-shadow: 0 0 8px  #cc7a00; 
	}

	.detail-form input, select, textarea {
	margin-bottom: 10px;
	border: 1px solid #ccc;
	border-radius: 3px;
	}
	input {
	width: calc(100% - 10px);
	padding: 5px;
	}
	input[type="date"] {
	padding: 4px 5px;
	}
	textarea {
	width: calc(100% - 12px);
	padding: 5px;
	}
	.item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
	color: #cc7a00;
	}
	.item input:hover, .item select:hover, .item textarea:hover {
	border: 1px solid transparent;
	box-shadow: 0 0 3px 0 #cc7a00;
	color: #cc7a00;
	}
	.item {
	position: relative;
	margin: 10px 0;
	}
	.item span {
	color: red;
	}
	input[type="date"]::-webkit-inner-spin-button {
	display: none;
	}
	.item i, input[type="date"]::-webkit-calendar-picker-indicator {
	position: absolute;
	font-size: 20px;
	color: #cc7a00;
	}
	.item i {
	right: 4%;
	top: 30px;
	z-index: 1;
	}
	[type="date"]::-webkit-calendar-picker-indicator {
	right: 1%;
	z-index: 2;
	opacity: 0;
	cursor: pointer;
	}
	input[type=radio], input[type=checkbox]  {
	display: none;
	}
	label.radio {
	position: relative;
	display: inline-block;
	margin: 5px 20px 15px 0;
	cursor: pointer;
	}
	.question span {
	margin-left: 30px;
	}
	.question-answer label {
	display: block;
	}
	label.radio:before {
	content: "";
	position: absolute;
	left: 0;
	width: 17px;
	height: 17px;
	border-radius: 50%;
	border: 2px solid #ccc;
	}
	input[type=radio]:checked + label:before, label.radio:hover:before {
	border: 2px solid #cc7a00;
	}
	label.radio:after {
	content: "";
	position: absolute;
	top: 6px;
	left: 5px;
	width: 8px;
	height: 4px;
	border: 3px solid #cc7a00;
	border-top: none;
	border-right: none;
	transform: rotate(-45deg);
	opacity: 0;
	}
	input[type=radio]:checked + label:after {
	opacity: 1;
	}
	.btn-block {
	margin-top: 10px;
	text-align: center;
	}
	.area-detail-form .grid-detail .testbox button {
	width: 150px;
	padding: 10px;
	border: none;
	border-radius: 5px; 
	background: #cc7a00;
	font-size: 16px;
	color: #fff;
	cursor: pointer;
	}
	.area-detail-form .grid-detail .testbox  button:hover {
	background: #ff9800;
	}
	@media (min-width: 568px) {
	.name-item, .city-item {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	}
	.name-item input, .name-item div {
	width: calc(50% - 20px);
	}
	.name-item div input {
	width:97%;}
	.name-item div label {
	display:block;
	padding-bottom:5px;
	}
  }




/**/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
} 
nav{
  display: flex;
  top: 0;
  left: 0;
  position: fixed;
  height: 80px;
  width: 100%;
  background: #fff;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
  z-index: 2;
}
nav ul li .Button_nav{
	text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 10px 15px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
	color: white;
	background: orange;
	border-radius: 20px;
}
nav .logo{
  color: #000;
  font-size: 25px;
  font-weight: 600;
}

nav .logo span{
    color: orange;
}
nav ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #000;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 10px 15px;
  border-radius: 20px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: #000;
  background: orange;
}

nav ul li .Button_nav:hover{
	text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 10px 15px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
	color: #ffa500;
	background-color: white;
	border-right:2px solid;
	border-top:2px solid;
	border-left:2px solid;
	border-bottom:2px solid;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}

nav .menu-btn i{
  color: orange;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}

footer{
right: 0;
  left: 0;
  height:auto;
  width: 100%;
  margin-top: 14%;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  background: #1b1b1b;
}

footer .containers_footer{
	padding-top: 30px;
	margin-top: 90px;
	display: grid;
	grid: 200px / 450px 450px 450px;
  	grid-gap: 40px;
	text-align: left;
	justify-content: center;
  	
}
footer .container-4{
	justify-content: center;
	text-align: center;
	padding-bottom: 30px;
}

  
  footer .containers_footer a ,
  footer .containers_footer p ,
  footer .containers_footer h3 {
	color: #999;
	margin: 20px;
	text-decoration:none;
  }
  
  footer .containers_footer a:hover, footer .containers_footer a:focus {
	color: #aaa;
	text-decoration:none;
	border-bottom:1px dotted #999;
  }
  
  footer .containers_footer .form-control {
	  background-color: #1f2022;
	  box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	  border: none;
	  resize: none;
	  color: #d1d2d2;
	  
	  padding: 0.7em 1em;
  }
  

/*****************************/
/* responsive nav*/
/*****************************/

@media (max-width: 1024px){
  nav{
    padding: 0 40px 0 50px;
  }

}

@media (max-width: 790px) {
  nav .menu-btn i{
    display: block;
  }
  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: #111;
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a,
  nav ul li .Button_nav{
    width: 100%;
    color: white;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.10, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: orange;
  }

  footer{
	right: 0;
	  left: 0;
	  height:auto;
	  width: 100%;
	  align-items: center;
	  justify-content: space-between;
	  padding: 0 50px 0 100px;
		  background: #1b1b1b;
	}
	
	footer .containers_footer{
		padding-top: 30px;
		margin-top: 90px;
		display: grid;
		grid: auto/ 150px 150px 150px;
		  grid-gap: 40px;
		text-align: left;
		justify-content: center;
		  
	}
	footer .container-4{
		justify-content: center;
		text-align: center;
		padding-bottom: 30px;
	}
	
	  
	  footer .containers_footer a ,
	  footer .containers_footer p ,
	  footer .containers_footer h3 {
		color: #999;
		margin: 20px;
		text-decoration:none;
	  }
	  
	  footer .containers_footer a:hover, footer .containers_footer a:focus {
		color: #aaa;
		text-decoration:none;
		border-bottom:1px dotted #999;
	  }
	  
	  footer .containers_footer .form-control {
		  background-color: #1f2022;
		  box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
		  border: none;
		  resize: none;
		  color: #d1d2d2;
		  
		  padding: 0.7em 1em;
	  }


}



/*****************************/
/* responsive footer anad banner-area */
/*****************************/

@media (min-width: 1024px){
    
    .banner-area .banner-slider{
        margin-top: 60px;
        /*ปรับขนาด branner*/
        width: 1535px;
        height: 500px;
        /*border-radius: 10px;*/
        overflow:hidden;

    }

    .slides{
        width: 500%;
        height: 500px;
        display: flex;
    }

    .slides input{
        display: none;
        
    }

    .slide{
        width: 20%;
        transition: 2s;
    }

    .slide img{
        /*ขนาดรูป*/
        width: 1535px;
        height: 500px;
    }

    /*Manual navigation slide*/

    .navigation-manual{
        position: absolute;
        width: 1535px;
        margin-top: -40px;
        display: flex;
        justify-content: center;

    }

    .manual-btn{
        border: 2px solid white;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 1s;
    }

    .manual-btn:not(:last-child){
        margin-right: 40px;
    }

    .manual-btn:hover{
        background: white;
    }

    #radio1:checked ~ .first{
        margin-left: 0;
    }

    #radio2:checked ~ .first{
        margin-left: -20%;
    }

    #radio3:checked ~ .first{
        margin-left: -40%;
    }

    #radio4:checked ~ .first{
        margin-left: -60%;
    }

    /*Auto navigation slide*/
    .navigation-auto{
        position: absolute;
        display: flex;
        width: 1535px;
        margin-top: 460px;
        justify-content: center;
    }

    .navigation-auto div{
        border: 2px solid white;
        padding: 5px;
        border-radius: 10px;
        transition: 1s;
    }

    .navigation-auto div:not(:last-child){
        margin-right: 40px;
    }

    /*ทำให้จุดมีพื้นหลัง*/
    #radio1:checked ~ .navigation-auto .auto-btn1{
        background: white;
    }

    #radio2:checked ~ .navigation-auto .auto-btn2{
        background: white;
    }

    #radio3:checked ~ .navigation-auto .auto-btn3{
        background: white;
    }

    #radio4:checked ~ .navigation-auto .auto-btn4{
        background: white;
    }
}
  
@media screen and (min-width: 768px) and (max-width: 1023px){
    .banner-area{
        max-width: 1023px;
        max-height: 500px;
    }

.banner-area .banner-slider{
	margin-top: 60px;
	/*ปรับขนาด branner*/
	width: 1023px;
	height:auto;
	/*border-radius: 10px;*/
	overflow:hidden;
}
.slides{
    /*ตำแหน่งปุ่มสไลด์*/
	width: 500%;
	height: 270px;
	display: flex;
    object-fit: cover;
    
}

.slides input{
	display: none;
	 
}

.slide{
	width: 20%;
	transition: 2s;
}

.slide img{
	/*ขนาดรูป*/
    max-width:767px;
    max-height:500px;
    width: auto;
    height: auto;
}

/*Manual navigation slide*/

.navigation-manual{
	position: absolute;
	width: 768px;
	margin-top: -40px;
	display: flex;
    z-index: -1;
	justify-content: center;

}

.manual-btn{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	transition: 1s;
}

.manual-btn:not(:last-child){
	margin-right: 40px;
}

.manual-btn:hover{
	background: white;
}

#radio1:checked ~ .first{
	margin-left: 0;
}

#radio2:checked ~ .first{
	margin-left: -20%;
}

#radio3:checked ~ .first{
	margin-left: -40%;
}

#radio4:checked ~ .first{
	margin-left: -60%;
}

/*Auto navigation slide*/
.navigation-auto{
	position: absolute;
	display: flex;
	width: 768px;
	margin-top: 230px;
	justify-content: center;
}

.navigation-auto div{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	transition: 1s;
    z-index: -1;
}

.navigation-auto div:not(:last-child){
	margin-right: 40px;
    z-index: -1;

}

/*ทำให้จุดมีพื้นหลัง*/
#radio1:checked ~ .navigation-auto .auto-btn1{
	background: white;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
	background: white;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
	background: white;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
	background: white;
}

/*****************************/
	
.grid-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
   /* margin: 0px 0;*/
}

.container-about{
	max-width: 750px;
	margin-top: 30px; 
	margin-left:100px;
}
.test1 img{
	max-width: 768px;
    width: auto;
}

.grid-container .Asa img{
    max-width: 350px;
	max-height: 350px;
	width: auto;
    height: auto;
    /*flex-basis: 40%;*/
    position: relative;
    margin-left: 0px;
}


.grid-container .item1 {
    flex-basis: 50%;
    position: relative;
    
}

/**************ข้อมูลน้องอาสา***************/
.but-1 {
	width: 150px;
	height: 40px;
	font-size: medium;
	border-radius: 20px;
	padding: 2px 2px;
	outline: none;
	margin-top: 20px;
	background-color: orange;
}


.grid-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
	position: absolute;
	margin-top: 30px;
	z-index: -10;
   /* margin: 0px 0;*/
}

.grid-container .Asa img{
    max-width: 350px;
	max-height: 350px;
	width: auto;
    height: auto;
    flex-basis: 30%;
    position: relative;
    margin-left: 0px;
}

.grid-container .item1 {
    flex-basis: 50%;
    position: relative;
	width: 500px;
    
}

/**************how to น้องอาสา***************/

.hot_to {
	margin-top: 450px;
	margin-left: 60px;

}
.hot_to img{
	border-radius: 20px;
	width: 850px;
	
}



}
@media screen and (min-width: 480px) and (max-width: 767px){
    .banner-area{
        max-width: 767px;
        max-height: 500px;
    }

.banner-area .banner-slider{
	margin-top: 60px;
	/*ปรับขนาด branner*/
	width: 767px;
	height:auto;
	/*border-radius: 10px;*/
	overflow:hidden;
}
.slides{
    /*ตำแหน่งปุ่มสไลด์*/
	width: 500%;
	height: 270px;
	display: flex;
    object-fit: cover;
    
}

.slides input{
	display: none;
	 
}

.slide{
	width: 20%;
	transition: 2s;
}

.slide img{
	/*ขนาดรูป*/
    max-width:767px;
    max-height:500px;
    width: auto;
    height: auto;
}

/*Manual navigation slide*/

.navigation-manual{
	position: absolute;
	width: 768px;
	margin-top: -40px;
	display: flex;
    z-index: -1;
	justify-content: center;

}

.manual-btn{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	transition: 1s;
}

.manual-btn:not(:last-child){
	margin-right: 40px;
}

.manual-btn:hover{
	background: white;
}

#radio1:checked ~ .first{
	margin-left: 0;
}

#radio2:checked ~ .first{
	margin-left: -20%;
}

#radio3:checked ~ .first{
	margin-left: -40%;
}

#radio4:checked ~ .first{
	margin-left: -60%;
}

/*Auto navigation slide*/
.navigation-auto{
	position: absolute;
	display: flex;
	width: 768px;
	margin-top: 230px;
	justify-content: center;
}

.navigation-auto div{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	transition: 1s;
    z-index: -1;
}

.navigation-auto div:not(:last-child){
	margin-right: 40px;
    z-index: -1;

}

/*ทำให้จุดมีพื้นหลัง*/
#radio1:checked ~ .navigation-auto .auto-btn1{
	background: white;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
	background: white;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
	background: white;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
	background: white;
}

/**************ข้อมูลน้องอาสา***************/
.but-1 {
	width: 150px;
	height: 40px;
	font-size: medium;
	border-radius: 20px;
	padding: 2px 2px;
	outline: none;
	margin-top: 20px;
	background-color: orange;
}

.grid-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
	position: relative;
	margin-top: 30px;
	z-index: -10;
   /* margin: 0px 0;*/
}

.container-about{
	max-width: 600px;
	margin-top: 30px; 
	margin-left:60px;
}

.container-about p{
	font-size: small;
}


.grid-container .Asa img{
    max-width: 350px;
	max-height: 350px;
	width: auto;
    height: auto;
    flex-basis: 30%;
    position: relative;
    margin-left: 0px;
}

.grid-container .item1 {
    flex-basis: 50%;
	width: 220px;
    
}

/**************how to น้องอาสา***************/

.hot_to {
	margin-top: 50px;
	margin-left: 50px;

}
.hot_to img{
	border-radius: 20px;
	width: 650px;
	
}

/*ประชาสัมพันธ์*/

.activi{
	margin-top: 30px;
	margin-left: 30px;
	margin-right: 30px;
}


.header-activi{
	display: grid;
	grid-template-columns: repeat(2,1.5fr);
	text-align: left;
	margin-top: 0px;
	justify-content: center;
	margin-top: 20px;
	margin-left: 50px;
	align-content: center;
 }

.header-activi a{
	text-decoration: none;
	color: #000000;
	margin-top: 10px;
	width: 150px;
	margin-left: 200px;
}

.header-activi a:hover{
	color: #cc7a00;
}

.swiper{
	max-width: 600px;
	height: 300px;
	width: 600px;
	
}
.swiper h3{
	font-size: 20px;
}
.swiper-wrapper .swiper-slide p{
	font-size: 16px;
}

}
@media screen and (max-width: 479px){

    /**************banner***************/
    .banner-area{
        max-width: 479px;
        max-height: 500px;
    }

.banner-area .banner-slider{
	margin-top: 60px;
	/*ปรับขนาด branner*/
	width: 479px;
	height:auto;
	/*border-radius: 10px;*/
	overflow:hidden;
}
.slides{
    /*ตำแหน่งปุ่มสไลด์*/
	width: 500%;
	height: 270px;
	display: flex;
    object-fit: cover;
    
}

.slides input{
	display: none;
	 
}

.slide{
	width: 20%;
	transition: 2s;
}

.slide img{
	/*ขนาดรูป*/
    max-width:479px;
    max-height:500px;
    width: auto;
    height: auto;
}

/*Manual navigation slide*/

.navigation-manual{
	position: absolute;
	width: 479px;
	margin-top: -40px;
	display: flex;
    z-index: -1;
	justify-content: center;

}

.manual-btn{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	transition: 1s;
    visibility: hidden;
}

.manual-btn:not(:last-child){
	margin-right: 40px;
}

.manual-btn:hover{
	background: white;
}

#radio1:checked ~ .first{
	margin-left: 0;
}

#radio2:checked ~ .first{
	margin-left: -20%;
}

#radio3:checked ~ .first{
	margin-left: -40%;
}

#radio4:checked ~ .first{
	margin-left: -60%;
}

/*Auto navigation slide*/
.navigation-auto{
	position: absolute;
	display: flex;
	width: 479px;
	margin-top: 100px;
	justify-content: center;
}

.navigation-auto div{
	border: 2px solid white;
	padding: 5px;
	border-radius: 10px;
	transition: 1s;
    z-index: -1;
}

.navigation-auto div:not(:last-child){
	margin-right: 40px;
    z-index: -1;

}

/*ทำให้จุดมีพื้นหลัง*/
#radio1:checked ~ .navigation-auto .auto-btn1{
	background: white;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
	background: white;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
	background: white;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
	background: white;
}
/**************banner***************/


/**************ข้อมูลน้องอาสา***************/
.but-1 {
	width: 100px;
	height: 30px;
	font-size: medium;
	border-radius: 20px;
	padding: 2px 2px;
	outline: none;
	margin-top: 20px;
	background-color: orange;
}

.grid-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
	position: relative;
	margin-top: -80px;
	z-index: -10;
   /* margin: 0px 0;*/
}

.grid-container .Asa img{
    max-width: 200px;
	max-height: 200px;
	width: auto;
    height: auto;
    flex-basis: 30%;
    position: relative;
    margin-left: 0px;
}

.grid-container .item1 {
    flex-basis: 50%;
	width: 180px;
    
}

/**************how to น้องอาสา***************/

.hot_to {
	margin-top: 50px;
	margin-left: 30px;

}
.hot_to img{
	border-radius: 20px;
	width: 410px;
	
}
/*ประชาสัมพันธ์*/

.activi{
	margin-top: 30px;
	margin-left: 30px;
	margin-right: 30px;
}

.header-activi{
	display: grid;
	grid-template-columns: repeat(2,1.5fr);
	text-align: left;
	margin-top: 0px;
	justify-content: center;
	margin-top: 20px;
	margin-left: 100px;
	align-content: center;
 }

.header-activi a{
	text-decoration: none;
	color: #000000;
	margin-top: 10px;
	width: 150px;
	margin-left: 200px;
}

.header-activi a:hover{
	color: #cc7a00;
}

.swiper{
	max-width: 410px;
	height: 300px;
	width: 405px;
	
}
.swiper h3{
	font-size: 20px;
}
.swiper-wrapper .swiper-slide p{
	font-size: 16px;
}


footer{
	right: 0;
	  left: 0;
	  /*height: 30%;*/
	  width: 100%;
	  align-items: center;
	  justify-content: space-between;
	background: #1b1b1b;
}
	
	footer .containers_footer{
		display: grid;
		grid: auto / 120px 100px 100px;
		justify-content: center;
		  
	}
	
	  
	  footer .containers_footer a ,
	  footer .containers_footer p ,
	  footer .containers_footer h3 {
		color: #999;
		/*margin: 20px;*/
		text-decoration:none;
	  }
	  
	  footer .containers_footer a:hover, footer .containers_footer a:focus {
		color: #aaa;
		text-decoration:none;
		border-bottom:1px dotted #999;
	  }
	  
	  footer .containers_footer .form-control {
		  background-color: #1f2022;
		  box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
		  border: none;
		  resize: none;
		  color: #d1d2d2;
		  
	  }


}


/*****************************/
/* responsive Volunteer_Page */
/*****************************/

  
@media screen and (min-width: 768px) and (max-width: 1023px){
	.search_wrap {
		width: 600px;
		margin: 40px;
		margin-left: 150px;
		justify-content: center;
		align-items: center;
		
	}
	
	.search_wrap .search_box{
		position: relative;
		width: 500px;
		height: 60px;
	}
	.search_wrap .search_box .search_input {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		padding: 10px 20px;
		border-radius: 3px;
		font-size: 18px;
		padding-right: 80px;
		border-radius: 50px;
	}
	
	.search_wrap .search_box .btn{
		position: absolute;
		top: 0;
		right: 0;
		width: 60px;
		height: 100%;
		background: #ffa500;
		z-index: 1;
		border-radius: 50px;
		cursor: pointer;
	}
	
	.search_wrap .search_box .closeBtn{
		position: absolute;
		top: 0;
		right: 55px;
		width: 60px;
		height: 100%;
		z-index: 1;
		cursor: pointer;
	}
	
	.search_wrap .search_box .btn:hover{
		background: #ffb731;
	}
	
	.search_wrap .search_box .btn.btn_search .material-symbols-outlined{
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #000000;
		font-size: 30px;
	}
	
	.search_wrap .search_box .closeBtn .material-symbols-outlined{
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #000000;
		font-size: 25px;
	}
	
	.myBtnContainers {
		justify-content: center;
	}
	
	
.list-container-Volunteer{
	display: grid;
	grid: auto / 825px auto;
	
}

.lists-Volunteer{
	background: #fff;
	display: grid;
	grid: 150px / 320px auto;
  	grid-gap: 0px;
	margin-left: 30px;
	margin-top: 20px;
	border-radius: 20px;
	width: 710px;
	height: 245px;
}

.lists-Volunteer .img-Volunteer img{
	width: 400px;
	height: 245px;
	border-radius: 20px 0px 0px 20px ;
}

.lists-Volun-toCome,.lists-Volun-toCome h4
,.lists-Volun-toCome table,.lists-Volun-toCome th,
.lists-Volun-toCome th small ,.lists-Volun-toCome td, th 
{
	visibility:hidden;
}


	
	/*------------status button-------------*/
	.status .status-free {
		background: rgb(183, 212, 139);
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-free p{
		text-align: center;
		padding: 3px;
	}
	
	.status .status-busy {
		background: #FF4B4B;
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-busy p{
		text-align: center;
		padding: 3px;
	}
	/*----------------------------------*/
	
	.grid-detail .Detail_Volunteer .status .status-free{
		margin-top: 10px;
	}
	
	.grid-detail .Detail_Volunteer .button-detail{
		/*display: flex;
		flex-direction: row;*/
	
		display: grid;
		grid: 120px / auto auto;
		  grid-gap: 20px;
		  width: 300px;
		margin-top: 20px;
	}
	
	.area-detail {
		margin-top: 80px;
	}
	
	.lists-Volunteer .Name_Volunteer{
		padding: 20px;
		margin-left: 95px;
	}
}

@media screen and (min-width: 480px) and (max-width: 767px){
    .search_wrap {
		width: 400px;
		margin: 40px;
		margin-left: 50px;
		justify-content: center;
		align-items: center;
		
	}
	
	.search_wrap .search_box{
		position: relative;
		width: 400px;
		height: 60px;
	}
	.search_wrap .search_box .search_input {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		padding: 10px 20px;
		border-radius: 3px;
		font-size: 18px;
		padding-right: 80px;
		border-radius: 50px;
	}
	
	.search_wrap .search_box .btn{
		position: absolute;
		top: 0;
		right: 0;
		width: 60px;
		height: 100%;
		background: #ffa500;
		z-index: 1;
		border-radius: 50px;
		cursor: pointer;
	}
	
	.search_wrap .search_box .closeBtn{
		position: absolute;
		top: 0;
		right: 55px;
		width: 60px;
		height: 100%;
		z-index: 1;
		cursor: pointer;
	}
	
	.search_wrap .search_box .btn:hover{
		background: #ffb731;
	}
	
	.search_wrap .search_box .btn.btn_search .material-symbols-outlined{
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #000000;
		font-size: 30px;
	}
	
	.search_wrap .search_box .closeBtn .material-symbols-outlined{
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%);
		color: #000000;
		font-size: 25px;
	}
	
	.myBtnContainers {
		justify-content: center;
	}
	
	
.list-container-Volunteer{
	display: grid;
	grid: auto / 825px auto;
	
}

.lists-Volunteer{
	background: #fff;
	display: grid;
	grid: 150px / 320px auto;
  	grid-gap: 0px;
	margin-left: 30px;
	margin-top: 20px;
	border-radius: 20px;
	width: 450px;
	height: 150px;
}

.lists-Volunteer .img-Volunteer img{
	width: 200px;
	height: 150px;
	border-radius: 20px 0px 0px 20px ;
}

.lists-Volun-toCome,.lists-Volun-toCome h4
,.lists-Volun-toCome table,.lists-Volun-toCome th,
.lists-Volun-toCome th small ,.lists-Volun-toCome td, th 
{
	visibility:hidden;
}


	
	/*------------status button-------------*/
	.status .status-free {
		background: rgb(183, 212, 139);
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-free p{
		text-align: center;
		padding: 3px;
	}
	
	.status .status-busy {
		background: #FF4B4B;
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-busy p{
		text-align: center;
		padding: 3px;
	}
	/*----------------------------------*/
	
	
	.lists-Volunteer.Name_Volunteer{
		margin-left: -110px;
		margin-top: -10px;
		width: 350px;
		font-size:10px;
	}
}


/*****************************/
/* responsive Volunteer_DetailPage */
/*****************************/

  
@media screen and (min-width: 768px) and (max-width: 1023px){
	.grid-detail{
		display:contents;
		justify-content: space-between;
		/*align-items: center;*/
	   /* margin: 0px 0;*/
	}
	
	
	
	/*ตัวหนังสือ*/
	.grid-detail .Detail_Volunteer {
		width: auto;
		flex-basis: 50%;
		position: relative;
		text-align: top;
		margin-top: 20px;
		margin-left: 60px;
	}
	
	.grid-detail .Detail_Volunteer h2{
		color: #000000;
		/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
	}
	
	
	/*------------status button-------------*/
	.status .status-free {
		background: rgb(183, 212, 139);
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-free p{
		text-align: center;
		padding: 3px;
	}
	
	.status .status-busy {
		background: #FF4B4B;
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-busy p{
		text-align: center;
		padding: 3px;
	}
	/*----------------------------------*/
	
	.grid-detail .Detail_Volunteer .status .status-free{
		margin-top: 10px;
	}
	
	.grid-detail .Detail_Volunteer .button-detail{
		/*display: flex;
		flex-direction: row;*/
	
		display: grid;
		grid: 120px / auto auto;
		  grid-gap: 20px;
		  width: 300px;
		margin-top: 20px;
	}
	
	.area-detail {
		margin-top: 80px;
	}
	
	.area-detail .Name_Volunteer{
		padding: 20px;
		margin-left: 40px;
	}
	
}

@media screen and (min-width: 480px) and (max-width: 767px){
    .grid-detail{
		display:contents;
		justify-content: space-between;
		/*align-items: center;*/
	   /* margin: 0px 0;*/
	}
	
	
	
	/*ตัวหนังสือ*/
	.grid-detail .Detail_Volunteer {
		width: 400px;
		position: relative;
		text-align: left;
		margin-top: 20px;
		margin-left: 60px;
		font-size: small;

	}
	
	.grid-detail .Detail_Volunteer h2{
		color: #000000;
		/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
	}
	
	
	/*------------status button-------------*/
	.status .status-free {
		background: rgb(183, 212, 139);
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-free p{
		text-align: center;
		padding: 3px;
	}
	
	.status .status-busy {
		background: #FF4B4B;
		width: 60px;
		height: 30px;
		border-radius: 20px;
	}
	.status .status-busy p{
		text-align: center;
		padding: 3px;
	}
	/*----------------------------------*/
	
	.grid-detail .Detail_Volunteer .status .status-free{
		margin-top: 10px;
	}
	
	.grid-detail .Detail_Volunteer .button-detail{
		/*display: flex;
		flex-direction: row;*/
	
		display: grid;
		grid: 120px / auto auto;
		  grid-gap: 20px;
		  width: 300px;
		margin-top: 20px;
	}
	
	.area-detail {
		margin-top: 80px;
	}
	
	.Name_Volunteer{
		padding: 20px;
		margin-left: 40px;
	}
	
}


/*****************************/
/* responsive RegisterForm_Volunteer */
/*****************************/

  
@media screen and (min-width: 768px) and (max-width: 1023px){
	/*ตัวหนังสือ*/
.area-detail-form .Detail_Volunteer-form {
	width: 600px;
    position: relative;
	text-align: top;
	margin-top: 30px;
    margin-left: 40px;
}

.area-detail-form .grid-detail .grid-form input{
	color: #ccc;
}

.grid-detail .Detail_Volunteer-form h2{
	color: #000000;
	/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
}

/*พื้นที่กรอกฟอร์ม*/

.info input:hover,  .info textarea:hover {
	border: 1px solid transparent;
	box-shadow: 0 0 3px 0 #cc7a00;
	color: #cc7a00;
}

.testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .area-detail-form form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
	  border-radius: 20px;
		width: 600px;
		margin-top: 20px;
		height: auto;
		margin-left: 10px;
      box-shadow: 0 0 8px  #cc7a00; 
      }

      .area-detail-form input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 4%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .area-detail-form .grid-detail .testbox button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .area-detail-form .grid-detail .testbox  button:hover {
      background: #ff9800;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
	}

}

@media screen and (min-width: 480px) and (max-width: 767px){
    /*ตัวหนังสือ*/
.area-detail-form .Detail_Volunteer-form {
	width: 450px;
    position: relative;
	text-align: top;
	font-size: smaller;
	margin-top: 30px;
    margin-left: 20px;
}

.area-detail-form .grid-detail .grid-form input{
	color: #ccc;
}

.grid-detail .Detail_Volunteer-form h2{
	color: #000000;
	/*text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);*/
}

/*พื้นที่กรอกฟอร์ม*/

.info input:hover,  .info textarea:hover {
	border: 1px solid transparent;
	box-shadow: 0 0 3px 0 #cc7a00;
	color: #cc7a00;
}

.testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .area-detail-form form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
	  border-radius: 20px;
		width: 450px;
		margin-top: 20px;
		height: auto;
		margin-left: 1px;
      box-shadow: 0 0 8px  #cc7a00; 
      }

      .area-detail-form input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 4%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .area-detail-form .grid-detail .testbox button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .area-detail-form .grid-detail .testbox  button:hover {
      background: #ff9800;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
	}

}



/*****************************/
/* responsive About us_Page */
/*****************************/

  
@media screen and (min-width: 768px) and (max-width: 1023px){
	
.test1{
	margin-top: 60px;
	/*background-color: #ffa500;*/
	max-width: 1518.7;
	width: auto;
	height: 30%;
}

.test1 h1{
	justify-content: center;
	padding-top: 220px;
	text-align: center;
}

/*****************************/
/* หน้าหลัก -> รายละเดียกเว็บไซต์ และน้องอาสา */
/*****************************/

.grid-container{
    display: flex;
    justify-content: space-between;
	position:relative;
    align-items: center;
   /* margin: 0px 0;*/
}

.grid-container .Asa img{
    width: 500px;
    height: 500px;
    flex-basis: 40%;
    position: relative;
    margin-left: 40px;
}


.grid-container .item1 {
    flex-basis: 50%;
    position: relative;
    margin-right: 50px;
}


}

@media screen and (min-width: 480px) and (max-width: 767px){
    .test1{
		margin-top: 60px;
		/*background-color: #ffa500;*/
		max-width: 1518.7;
		width: auto;
		height: auto;
	}
    .test1 img{
		max-width: 100%;
		width: auto;
		height: 35%;
	}
	
	.test1 h1{
		justify-content: center;
		padding-top: 220px;
		text-align: center;
	}
	
	/*****************************/
	/* หน้าหลัก -> รายละเดียกเว็บไซต์ และน้องอาสา */
	/*****************************/
	
	.grid-container{
		display: flex;
		justify-content: space-between;
		position:relative;
		align-items: center;
	   /* margin: 0px 0;*/
	}
	
	.grid-container .Asa img{
		max-width: 500px;
		max-height: 500px;
		width: 200px;
		height: 200px;
		flex-basis: 40%;
		position: relative;
		margin-left: 40px;
	}
	
	
	.grid-container .item1 {
		flex-basis: 50%;
		font-size: small;
		position: relative;
		margin-right: 50px;
	}
	
}




/*****************************/
/* responsive Contact_Page */
/*****************************/

@media screen and (min-width: 768px) and (max-width: 1023px){
	

/*ตัวหนังสือ*/
.grid-Asa .DetalAsa_con {
	width: 200px;
    flex-basis: 45%;
    position: relative;
    margin-left: 40px;
	margin-top: 30px;
}


/*แมพ*/
.grid-Asa .fb-pg {
	/*background: #ffa500;*/
    width: 200px;
    height: 400px;
	align-items: center;
    position: relative;
	margin-top: 20px;
	margin-left: -20px;
}

.map-pugin iframe{
	max-width: 1310px;
    max-height: 350px;
    width: 700px;
    height: 350px;
	margin-left: 40px;
	margin-top: 0px;
}
	
}
	
@media screen and (min-width: 480px) and (max-width: 767px){
	.grid-Asa{
		display: contents;
		justify-content: space-between;
		align-items: center;
	   /* margin: 0px 0;*/
	}
/*ตัวหนังสือ*/
.grid-Asa .DetalAsa_con {
	width: 200px;
    flex-basis: 45%;
    position: relative;
    margin-left: 40px;
	margin-top: 30px;
}


/*แมพ*/
.grid-Asa .fb-pg {
	/*background: #ffa500;*/
    width: 200px;
    height: 400px;
	align-items: center;
    position: relative;
	margin-top: 20px;
	margin-left: -20px;
}

.map-pugin iframe{
	max-width: 1310px;
    max-height: 350px;
    width: 500px;
    height: 350px;
	margin-left: 0px;
	margin-top: 0px;
}
}
	
	

/*****************************/
/* responsive Message ประชาสัมพันธ์*/
/*****************************/
@media (max-width: 1024px){
		
.container{
	margin-left: 30px;
	margin-right: 30px;
	
}

.list-card{
	display: grid;
	justify-content: center;
	grid: auto / 300px;
	height: auto;
	grid-gap: 20px;
	grid-template-columns: auto auto auto;
}

.list-card .card
{
	text-align: center;
	border-radius: 20px;
	font-size: 18px;
	background-color: #fff;
	display: flex;
	margin-top: 40px;
	flex-direction: column;
	align-items: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.list-card .card-body{
	margin: 20px;
}

.list-card img
{
	margin-bottom: 15px;
	display: block;
	width: 420px;
	border-radius: 20px 20px 0px 0px ;
	height: 200px;
	object-fit: cover;
	max-width: 100%;
}

  
  }

@media screen and (min-width: 768px) and (max-width: 1023px){
	
.container{
	margin-left: 30px;
	margin-right: 30px;
	
}

.list-card{
	display: grid;
	justify-content: center;
	grid: auto / 300px;
	height: auto;
	grid-gap: 20px;
	grid-template-columns: auto auto;
}

.list-card .card
{
	text-align: center;
	border-radius: 20px;
	font-size: 18px;
	background-color: #fff;
	display: flex;
	margin-top: 40px;
	flex-direction: column;
	align-items: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.list-card .card-body{
	margin: 20px;
}

.list-card img
{
	margin-bottom: 15px;
	display: block;
	width: 420px;
	border-radius: 20px 20px 0px 0px ;
	height: 200px;
	object-fit: cover;
	max-width: 100%;
}

}
	
@media screen and (min-width: 480px) and (max-width: 767px){
	
.container{
	margin-left: 20px;
	margin-right: 30px;
	margin-top: 20px;
	
}

.list-card{
	display: grid;
	justify-content: center;
	grid: auto / 150px;
	height: auto;
	grid-gap: 20px;
	grid-template-columns: auto ;
}

.list-card .card
{
	text-align: center;
	border-radius: 20px;
	font-size: 16px;
	background-color: #fff;
	display: flex;
	margin-top: 20px;
	flex-direction: column;
	align-items: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.list-card .card-body{
	margin: 20px;
}

.list-card img
{
	margin-bottom: 15px;
	display: block;
	width: 420px;
	border-radius: 20px 20px 0px 0px ;
	height: 200px;
	object-fit: cover;
	max-width: 100%;
}

}

</style>