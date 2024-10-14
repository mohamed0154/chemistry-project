
	const prags = document.querySelector(".prag");
    console.log(prags);
    
    prags.innerHTML = prags.innerHTML.split(" ").map( (char) =>{
        return "<span>"+char+"</span>"
     }).join(" ")
    
    anime.timeline({
    loop:true,
    })
    
    .add({
    targets:'.prag span' ,
    translateX : [-500 , 0] , 
    scale :[10 , 1] , 
    opacity:[0 , 1],
    easing:"easeOutExpo" , 
    duration:1500 , 
    delay:anime.stagger(300),
    })


    