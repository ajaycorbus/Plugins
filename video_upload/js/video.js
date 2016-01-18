var counter=new Array(50);
function initArray(){var i = counter.length;
  while (i--) {
    counter[i] = 0;
  }
}

initArray();


    function vidplay(count) {
       var video = document.getElementById("player"+count);
       var button = document.getElementById("play"+count);
	   
       if (video.paused) {
		   if(counter[count]<3){
          video.play();
		   button.textContent = "||";}
		  else{
			  document.getElementById("tv"+count).innerHTML="<h3 style='color:#FF0000; text-align:center;'>You are not autherized to play this video..</h3>";
			}
	counter[count]++;
		  
       } else {
          video.pause();
          button.textContent = ">";
       }
	
}
    function restart(count) {
        var video = document.getElementById("player"+count+"");
		if(counter[count]<3){
        video.currentTime = 0;
		counter[count]++;
		}else{alert("Sorry!! You are not autherized to play this video.");}
    }

    function skip(value,count) {
        var video = document.getElementById("player"+count);
        video.currentTime += value;
    }      
	
	
	function titlecheck(){
		
		var title=document.getElementById('vidTitle').value;
		if(title=="" ||  title==null){
			alert("Please enter the video title first!");
			
			return  false;}
	}