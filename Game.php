<!DOCTYPE html>
<html lang="en" manifest="example.appcache">

<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="game.css">
<title>Snake</title>
</head>
<body data-rsssl=1>
    <?php
$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    echo "<img  src='greenlight.gif' style='width:35px;height:35px; float:left;' />";
} else {
    echo "<img  src='no_int.gif' style='width:100px;height:100px;' />";
}
?>
	
<header class="wrap">
                <h1>Snake Game</h1>
                <p class="score">Score: <span id="score_value">0</span></p>
            </header>
            <canvas class="wrap" id="snake" width="500" height="500" tabindex="1"></canvas>
        
            <div id="gameover">
                <h2>Game Over</h2>
                <p>press <span style="background-color: #FFFFFF; color: #000000">space</span> to begin a</p>
                <a id="newgame_gameover">New Game</a>
                <a id="setting_gameover">Settings</a>
            </div>
        
            <div id="setting">
                <h2>Settings</h2>
                
                <a id="newgame_setting">New Game</a>
                
                <p>Speed:
                    <input id="speed1" type="radio" name="speed" value="120" checked/>
                    <label for="speed1">Slow</label>
                    <input id="speed2" type="radio" name="speed" value="75"/>
                    <label for="speed2">Normal</label>
                    <input id="speed3" type="radio" name="speed" value="35"/>
                    <label for="speed3">Fast</label>
                </p>
                
                <p>Wall:
                    <input id="wallon" type="radio" name="wall" value="1" checked/>
                    <label for="wallon">On</label>
                    <input id="walloff" type="radio" name="wall" value="0"/>
                    <label for="walloff">Off</label>
                </p>

            </div>
        
            <div id="menu">
                <h2>Snake Game</h2>

                <a id="newgame_menu">New Game</a>
                <a id="setting_menu">Settings</a>
	        <a href="lojaPHP/loja.php" style="font-size:24px;font-weight:bold;color:white;">Try the PHP Game too!</a>
            </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	

<script type="text/javascript">

(function(){  
    
    var canvas;
    var ctx;
    
    var snake;
    var snake_dir;
   var snake_next_dir;
    var snake_speed;
   
    var food = {x: 0, y: 0};
  
    var score;
  
    var wall;
   
    var screen_snake;
    var screen_menu;
    var screen_setting;
    var screen_gameover;
    var button_newgame_menu;
    var button_newgame_setting;
    var button_newgame_gameover;
    var button_setting_menu;
    var button_setting_gameover;
    var ele_score;
    var speed_setting;
    var wall_setting;


    var activeDot = function(x, y){
        ctx.fillStyle = "#158D1C";
        ctx.fillRect(x * 10, y * 10, 10, 10);
    }
    

    var changeDir = function(key){
        
        if(key == 38 && snake_dir != 2){
            snake_next_dir = 0;
        }else{
        
        if (key == 39 && snake_dir != 3){
            snake_next_dir = 1;
        }else{
        
        if (key == 40 && snake_dir != 0){
            snake_next_dir = 2;
        }else{
            
        if(key == 37 && snake_dir != 1){
            snake_next_dir = 3;
        } } } }
        
    }


    var addFood = function(){
        food.x = Math.floor(Math.random() * ((canvas.width / 10) - 1));
        food.y = Math.floor(Math.random() * ((canvas.height / 10) - 1));
        for(var i = 0; i < snake.length; i++){
            if(checkBlock(food.x, food.y, snake[i].x, snake[i].y)){
                addFood();
            }
        }
    }


    var checkBlock = function(x, y, _x, _y){
        return (x == _x && y == _y) ? true : false;
    }
    
    var altScore = function(score_val){
        ele_score.innerHTML = String(score_val);
    }
    

    var mainLoop = function(){
        
            var _x = snake[0].x;
            var _y = snake[0].y;
      snake_dir = snake_next_dir;

            switch(snake_dir){
                case 0: _y--; break;
                case 1: _x++; break;
                case 2: _y++; break;
                case 3: _x--; break;
            }

            snake.pop();
            snake.unshift({x: _x, y: _y});
            if(wall == 1){
           
                if (snake[0].x < 0 || snake[0].x == canvas.width / 10 || snake[0].y < 0 || snake[0].y == canvas.height / 10){
                    showScreen(3);
                    return;
                }
            }else{
            
                for(var i = 0, x = snake.length; i < x; i++){
                    if(snake[i].x < 0){
                        snake[i].x = snake[i].x + (canvas.width / 10);
                    }
                    if(snake[i].x == canvas.width / 10){
                        snake[i].x = snake[i].x - (canvas.width / 10);
                    }
                    if(snake[i].y < 0){
                        snake[i].y = snake[i].y + (canvas.height / 10);
                    }
                    if(snake[i].y == canvas.height / 10){
                        snake[i].y = snake[i].y - (canvas.height / 10);
                    }
                }
            }
       
            for(var i = 1; i < snake.length; i++){
                if (snake[0].x == snake[i].x && snake[0].y == snake[i].y){
                    showScreen(3);
                    return;
                }
            }
      
            if(checkBlock(snake[0].x, snake[0].y, food.x, food.y)){
                snake[snake.length] = {x: snake[0].x, y: snake[0].y};
                score += 1;
                altScore(score);
                addFood();
                activeDot(food.x, food.y);
            }

            ctx.beginPath();
            ctx.fillStyle = "#42AFEC ";
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        

            for(var i = 0; i < snake.length; i++){
                activeDot(snake[i].x, snake[i].y);
            }
    

            activeDot(food.x, food.y);
            

            setTimeout(mainLoop, snake_speed);
    }
    

    var newGame = function(){
        
        showScreen(0);
        screen_snake.focus();
      
        snake = [];
        for(var i = 4; i >= 0; i--){
            snake.push({x: i, y: 15});
        }
      
        snake_next_dir = 1;
        
        score = 0;
        altScore(score);
        
        addFood();
        
        canvas.onkeydown = function(evt) {
            evt = evt || window.event;
            changeDir(evt.keyCode);
        }
        mainLoop();
                
    }
  
    var setSnakeSpeed = function(speed_value){
        snake_speed = speed_value;
    }
    
    var setWall = function(wall_value){
        wall = wall_value;
        if(wall == 0){screen_snake.style.borderColor = "#606060";}
        if(wall == 1){screen_snake.style.borderColor = "#FFFFFF";}
    }
   
    var showScreen = function(screen_opt){
        switch(screen_opt){
                
            case 0:  screen_snake.style.display = "block";
                     screen_menu.style.display = "none";
                     screen_setting.style.display = "none";
                     screen_gameover.style.display = "none";
                     break;
                
            case 1:  screen_snake.style.display = "none";
                     screen_menu.style.display = "block";
                     screen_setting.style.display = "none";
                     screen_gameover.style.display = "none";
                     break;
                
            case 2:  screen_snake.style.display = "none";
                     screen_menu.style.display = "none";
                     screen_setting.style.display = "block";
                     screen_gameover.style.display = "none";
                     break;
                
            case 3: screen_snake.style.display = "none";
                    screen_menu.style.display = "none";
                    screen_setting.style.display = "none";
                    screen_gameover.style.display = "block";
                    break;
        }
    }
  
        
    window.onload = function(){
        
        canvas = document.getElementById("snake");
        ctx = canvas.getContext("2d");
      
            screen_snake = document.getElementById("snake");
            screen_menu = document.getElementById("menu");
            screen_gameover = document.getElementById("gameover");
            screen_setting = document.getElementById("setting");
        
            button_newgame_menu = document.getElementById("newgame_menu");
            button_newgame_setting = document.getElementById("newgame_setting");
            button_newgame_gameover = document.getElementById("newgame_gameover");
            button_setting_menu = document.getElementById("setting_menu");
            button_setting_gameover = document.getElementById("setting_gameover");
        
            ele_score = document.getElementById("score_value");
            speed_setting = document.getElementsByName("speed");
            wall_setting = document.getElementsByName("wall");
       

        button_newgame_menu.onclick = function(){newGame();};
        button_newgame_gameover.onclick = function(){newGame();}; 
        button_newgame_setting.onclick = function(){newGame();}; 
        button_setting_menu.onclick = function(){showScreen(2);};
        button_setting_gameover.onclick = function(){showScreen(2)};

        setSnakeSpeed(150);
        setWall(1);

        showScreen("menu");
        
       
            for(var i = 0; i < speed_setting.length; i++){
                speed_setting[i].addEventListener("click", function(){
                    for(var i = 0; i < speed_setting.length; i++){
                        if(speed_setting[i].checked){
                            setSnakeSpeed(speed_setting[i].value);
                        }
                    }
                });
            }
        
            for(var i = 0; i < wall_setting.length; i++){
                wall_setting[i].addEventListener("click", function(){
                    for(var i = 0; i < wall_setting.length; i++){
                        if(wall_setting[i].checked){
                            setWall(wall_setting[i].value);
                        }
                    }
                });
            }

        document.onkeydown = function(evt){
            if(screen_gameover.style.display == "block"){
                evt = evt || window.event;
                if(evt.keyCode == 32){
                    newGame();
                }
            }
        }
    }

})();

</body>      
</html>
