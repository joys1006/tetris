(function(){
	var getEl = (function(){
		var els = {
			container:'container',
			rankTable:'rankTable',
			clock:'time',
			tetrisTxt:'tetrisTxt',
			time:'clock',
			score:'score',
			lines:'lines',
			blocks:'blocks',
			grid:'grid',
			prev:'prevGrid',
			time:'time',
			score:'score',
			lines:'lines',
			blocks:'blocks',
			modalName:'modalName',
			inputName:'inputName',
			btnSubmitName:'btnSubmitName',
			modalOver:'modalOver',
			playerRank:'playerRank',
			gameOverMsg :'gameOverMsg',
			btnstart:'btnstart'
		};
		return function(key, by){
			if(by =='id'){
				return document.getElementById(els[key]);
			}else if(by == 'class'){
				return document.getElementsByClassName(key);
			}
		};
	})();
	var phase = {
		start:function(){},
		rank:(function(){
			var ranklist = function(){
				var rankName,count = 0,rankHtml = '';
				rankName = ['1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th'];
				for(i = 0;i < rankName.length;i++){
					if(i < 9){
						if(Number(scoreRank[i].score) == Number(scoreRank[i+1].score)){
							rankHtml += '<tr><td>'+ rankName[count] +'</td><td>'+ scoreRank[i].score +'</td><td>'+  scoreRank[i].name +'</td></tr>';
						}else{
							rankHtml += '<tr><td>'+ rankName[count] +'</td><td>'+ scoreRank[i].score +'</td><td>'+ scoreRank[i].name +'</td></tr>';
							count++;
						}
					}else{
						rankHtml += '<tr><td>'+ rankName[count] +'</td><td>'+ scoreRank[i].score +'</td><td>'+ scoreRank[i].name +'</td></tr>';
						count++;
					}
				}
				getEl('rankTable','id').innerHTML = rankHtml;
			};
			return ranklist;
		})(),
		play: (function(){
			var render = function(){
				(function(){
					var unitSize = data.unitSize, textOffset = 25;
					var grid, i, j;
					getEl('grid','id').innerHTML ="";
					for(i = 0; i < data.grid.length; i++){
						for(j = 0; j < data.grid[i].length; j++){
							grid = document.createElement('div');
							grid.class = "gridBlock";
							grid.style.cssText = "width:" + unitSize + "px;height:"+ unitSize + "px;position:absolute;top:" + (i * unitSize) + "px;left:" + (j * unitSize) + "px;background-color:"+_colors[data.grid[i][j]];
							getEl('grid','id').appendChild(grid);
						}
					}
				}());
				(function(){
					var curr, i, j, k, l, x, y, div, unitSize = data.unitSize;
					curr = block[data.curr].rotate[data.rotate];
					for(i = 0,j = curr.length; i < j; i++){
						for(k = 0, l = curr[0].length; k < l; k++){
							x = data.pos[0] + k;
							y = data.pos[1] - curr.length + i;
							div = document.createElement('div');
							div.class = "gridBlock";
							div.style.cssText = "position:absolute;width:" + unitSize + "px;height:" + unitSize + "px;top:" + (y * unitSize) + "px;left:" + (x * unitSize) + "px;background-color:" + _colors[curr[i][k]] + ";border:1px solid #333";
							if(y < 0) div.style.cssText = "display:none";
							getEl('grid','id').appendChild(div);
						}
					}
				}());
				(function(){
					var k, l, prevGrid, unitSize = data.unitSize, textOffset = 30;
					getEl('prev','id').innerHTML="";
					for(k = 0; k < 6; k++){
						for(l = 0; l < 5; l++){
							prevGrid = document.createElement('div');
							prevGrid.style.cssText = "width:" + unitSize + "px;height:"+ unitSize+ "px;position:absolute;top:" + ((k * unitSize) + textOffset) + "px;left:" + (l * unitSize) + "px;background-color:#111; border:1px solid #333";
							getEl('prev','id').appendChild(prevGrid);
						}
					}
				}());
				(function(){
					var i, j, prev, next, x, y, unitSize = data.unitSize, textOffset = 30;
					next = block[data.next].rotate[0];
					x = block[data.next].prePos[0];
					y = block[data.next].prePos[1] - next.length + 1;
					for(i = 0; i < next.length; i++){
						for(j = 0; j < next[i].length; j++){
							prev = document.createElement('div');
							prev.style.cssText = "width:" + unitSize + "px;height:"+ unitSize+ "px;position:absolute;top:" + ((i + y) * unitSize + textOffset) + "px;left:" + (j + x) * unitSize + "px;background-color:" + _colors[next[i][j]] + ";border:1px solid #333";
							getEl('prev','id').appendChild(prev);
						}
					}
				}());
				getEl('score','id').innerHTML = data.score;
				getEl('lines','id').innerHTML = data.lines;
				getEl('blocks','id').innerHTML = data.blocks;
			};
			var curr = (function(){
				var transform = (function(){
					var check = function(block, pos){
							var i, j, k, l, x, y;
							if(pos[0] < 0) return false;
							if(pos[0] + block[0].length > data.grid[0].length) return false;
							if(pos[1] > data.grid.length) return false;
							check:
							for(i = 0, j = block.length; i < j ; i++){
								for(k = 0, l = block[0].length; k < l; k++){
									if(block[i][k] !== 0){
										x = pos[0] + k;
										y = pos[1] - block.length + i;
										if(y > -1 && data.grid[y][x] !== 0){
											return false;
											break check;
										}
									}
								}
							}
						return true;
					};
					return {
						rotate:function(r){
							var b = block[data.curr], pos, x = 0;
							r = (r || 0) + data.rotate;
							r = r % b.rotate.length;
							if(data.pos[0] + b.rotate[r][0].length > data.grid[0].length) x = b.rotate[r][0].length - b.rotate[data.rotate][0].length;
							//음수 대응 필요
							pos = [data.pos[0] - x, data.pos[1]];
							if(!check(b.rotate[r], pos)) return false;
							data.rotate = r;
							data.pos = pos;
							return true;
						},
						move:function(x, y){
							var b, pos;
							b = block[data.curr].rotate[data.rotate];
							pos = [data.pos[0] + x, data.pos[1] + y];
							if(!check(b, pos)) return false;
							data.pos[0] = pos[0];
							data.pos[1] = pos[1];
							return true;
						}
					}
				})();
				return {
					down:(function(){
						var reset = function(){
							data.curr = data.next;
							data.rotate = 0;
							data.pos = [4,-1];
							data.blocks++;
							data.next = Math.floor((Math.random() * block.length));
						};
						var setSpeed = function(){
							var speed;
							speed = data.speed - Math.floor(data.lines / 15) * 50;
							data.speed = speed;
						};
						var setBlock = function(){
							var curr, i, j, k, l, x, y;
							curr = block[data.curr].rotate[data.rotate];
							for(i = 0, j = curr.length; i < j; i++){
								for(k = 0, l = curr[0].length; k < l; k++){
									x = data.pos[0]	+ k;
									y = data.pos[1] - curr.length + i;
									if(y > -1 && curr[i][k] > 0){
										data.grid[y][x] = curr[i][k];
									}
								}
							}
						};
						var checkLine = function(){
							var i, j, flag, line = 0, score = 0;
							for(i = 0; i < data.grid.length; i++){
								for(j = 0; j < 10; j++){
									if(data.grid[i][j] > 0) flag++;
									if(flag == 10){
										data.grid.splice(i,1);
										data.grid.unshift([0,0,0,0,0,0,0,0,0,0]);
										line++;
									}
								}
								flag = 0;
							}
							data.lines += line;
							switch(line){
								case 1 : score = 100; break;
								case 2 : score = 300; break;
								case 3 : score = 1000; break;
								case 4 : score = 2000; break;
							}
							data.score = data.score + score;
						};
						return function(){
							if(data.curr == undefined){
								reset();
							}
							if(transform.move(0, 1)) return true;
							setBlock();
							if((data.pos[1] - block[data.curr].rotate[data.rotate].length) < 0){
								return false;
							}else{
								checkLine();
								if(data.line % 15 == 0) setSpeed();
								reset();
								return 1;
							}
						}
					})(),
					key:function(e){
						switch(e.keyCode){
						case 32 : while(curr.down() === true); break; //spacebar
						case 37 : transform.move(-1, 0); break; //left
						case 38 : transform.rotate(1); break;  //rotate
						case 39 : transform.move(1, 0); break; //right
						case 40 : transform.move(0, 1); break; //down
						}
						render();
					}
				};
			})();
			var gameOver = function(){
				var calRank = function(){
					var i;
					rank:
					for(i = 0; i < scoreRank.length; i++){
						if(scoreRank[i].score == "-" || data.score > scoreRank[i].score){
							return i;
							break rank;
						}
					}
				};
				var showRank = function(){
					var i = calRank(), name = "unknown";
					getEl('modalName','id').style.display = "block";
					getEl('playerRank','id').innerHTML = "Your rank : " + (i + 1);
					getEl('btnSubmitName','id').onclick = function(e){

						name = getEl('inputName','id').value;
						getEl('inputName','id').value = "";
						scoreRank.splice(i,0,{score:data.score,name:name});
						scoreRank.pop();
						getEl('modalName','id').style.display = "none";
						showOver();
					}
				};
				var showOver = function(){
					getEl('modalOver','id').style.display = "block";
					getEl('gameOverMsg','id').innerHTML = 'Score : ' + data.score + '<br/>Removed Line : ' + data.lines + '<br/>Total Block : ' + data.blocks + '<br/>Play Time : ' + data.time;
					getEl('btnstart','id').onclick = function(e){
						getEl('modalOver','id').style.display = "none";
						scene('start');
					};
				};
				return (function(){
					if(calRank() != undefined) return showRank();
					showOver();
				})();
			};
			var init = function(){
				var timer, sec = 0 , minute = 0, loop, init;
				setDef(data);
				data.curr = data.next;
				timer = setInterval(function(){
					sec++;
					if(sec == 60) {
						sec = 0;
						minute++;
					}
					data.time = minute + ":" + sec;
					getEl('time','id').innerHTML = minute + ":" + sec;
				},1000);
				loop = function(){
					if(curr.down()){
						render();
						setTimeout(loop, data.speed);
					}else{
						clearInterval(timer);
						gameOver();
						document.onkeydown = null;
					}
				}
				document.onkeydown = curr.key;
				loop();
			};
			return init;
		})()
	};
	var data = {
		curr:undefined,
		rotate:0,
		pos:[4,0],
		next: this.getBlock,
		grid:[
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0],
			[0,0,0,0,0,0,0,0,0,0]
		],
		speed:700,
		lines:0,
		blocks:0,
		time:"0:0",
		score:0,
		unitSize:20,
		getBlock: function(){return Math.floor((Math.random() * block.length))}
	};
	var scene = function(id){
		var target, container, i;
		target = id.replace(/btn/g,'');
		container = getEl('container','class');
		btn = getEl('button','class');
		for(j = 0, k = btn.length; j < k; j++){
			btn[j].onclick = function(e){
				scene(this.id);
				return false;
			}
		}
		for(i = 0; i < container.length; i++){
			container[i].style.display = 'none';
		};
		document.getElementById(target).style.display ='block';
		phase[target]();
	};
	scene('start');
})();