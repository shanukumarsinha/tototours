

<audio id= "audio1" controls="controls" onloadeddata="setHalfVolume()" autoplay="true" loop="true">
    <source src="img/music/1.mp3"  type="audio/mp3">
</audio>

<script type="text/javascript">
function setHalfVolume() {
    var myAudio = document.getElementById("audio1");  
    myAudio.volume = 0.1; //Changed this to 0.5 or 50% volume since the function is called Set Half Volume ;)
}
</script>


