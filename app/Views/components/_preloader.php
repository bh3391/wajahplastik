<div class=" flex justify-center items-center z-10 mx-auto absolute w-full " id="loading">
  <div class="animate-spin rounded-full h-32 w-32  border-t-2 border-b-2 border-purple-500"></div>

<script>
    var load = document.getElementById(loading)

    window.addEventListener('load',function(){
        load.style.display = "none"
    })
</script>
</div>