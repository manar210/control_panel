
<!DOCTYPE html>
<html>
<style>

.rangeslider{
	width: 50%;
}

.myslider {
	-webkit-appearance: none;
	background: #99a8ac ;
	width: 50%;
	height: 10px;
	opacity: 2;
}


.myslider::-webkit-slider-thumb {
	-webkit-appearance: none;
	cursor: pointer;
	background: #913371 ;
	width: 5%;
	height: 20px;
}


.myslider:hover {
	opacity: 1;
}

</style>
<body>


<form action="php1.php" method = "POST">

    <?php 
    include ("php1.php")

    ?>
   

<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor1" >motor1: </lable>
<input type="range" min="0" max="180" value="0"
				class="myslider" id="motor1" name= "motor1">
<p>Value: <span id="demo"></span></p>
</div>

<script>
var rangeslider = document.getElementById("motor1");
var output = document.getElementById("demo");
output.innerHTML = rangeslider.value;

rangeslider.oninput = function() {
output.innerHTML = this.value;
}
</script>






<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor2" >motor2: </lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor2" name= "motor2">
    <p>Value: <span id="demo2"></span></p>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output2.innerHTML = this.value;
    }
    </script>






<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor3" >motor3: </lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor3" name= "motor3">
    <p>Value: <span id="demo3"></span></p>
    </div>
    
    <script>
    var rangeslider= document.getElementById("motor3");
    var output3 = document.getElementById("demo3");
    output3.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output3.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor4" >motor4: </lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor4" name= "motor4">
    <p>Value: <span id="demo4"></span></p>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor4");
    var output4 = document.getElementById("demo4");
    output4.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output4.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor5" >motor5: </lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor5" name= "motor5">
    <p>Value: <span id="demo5"></span></p>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor5");
    var output5 = document.getElementById("demo5");
    output5.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output5.innerHTML = this.value;
    }
    </script>





<div class="rangeslider">
<lable class= "lab" for ="volume" name="motor6" >motor6: </lable>
    <input type="range" min="0" max="180" value="0"
                    class="myslider" id="motor6" name= "motor6">
    <p>Value: <span id="demo6"></span></p>
    </div>
    
    <script>
    var rangeslider = document.getElementById("motor6");
    var output6 = document.getElementById("demo6");
    output6.innerHTML = rangeslider.value;
    
    rangeslider.oninput = function() {
    output6.innerHTML = this.value;
    }
</script>

<input class= "save" type= "submit" value ="save" name ="save">
    <input class= "run" type= "submit" value ="run" name ="run">



</body>
</html>
