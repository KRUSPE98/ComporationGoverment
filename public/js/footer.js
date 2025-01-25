// var rippleEffect = (function(){
//     var className, ripple;

//     className = 'btn';
//     ripple = document.createElement("div")
//     ripple.classList.add('ripple')

//     document.addEventListener('mousedown', function(e) {
//       if (e.target.classList.contains(className)) {
//         ripple.setAttribute("style", "top: " + e.offsetY + "px; left: " + e.offsetX + "px");
//         e.target.appendChild(ripple)
//       }
//     })
// })();

function createRipple(event) {
    const button = event.currentTarget;

    const circle = document.createElement("span");
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter/2;

    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
    circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
    circle.classList.add("ripple");

    const ripple = button.getElementsByClassName("ripple")[0];

    if (ripple) {
      ripple.remove();
    }

    button.appendChild(circle);
}

// const buttons = document.getElementsByTagName("button");
const buttons = document.getElementsByClassName("custom-btn");

for (const button of buttons) {
    button.addEventListener("click", createRipple);
}



const ANIMATEDCLASSNAME = "animated";
const ELEMENTS = document.querySelectorAll(".HOVER");
const ELEMENTS_SPAN = [];

ELEMENTS.forEach((element, index) => {
    let addAnimation = false;


    if (!ELEMENTS_SPAN[index])
        ELEMENTS_SPAN[index] =
            element.querySelector("span");

    element.addEventListener("mouseover", e => {
        ELEMENTS_SPAN[index].style.left =
            e.pageX - element.offsetLeft + "px";
        ELEMENTS_SPAN[index].style.top =
            e.pageY - element.offsetTop + "px";

        // Add an animation-class to animate via CSS.
        if (addAnimation)
            element.classList.add(ANIMATEDCLASSNAME);
    });

    element.addEventListener("mouseout", e => {
        ELEMENTS_SPAN[index].style.left =
            e.pageX - element.offsetLeft + "px";
        ELEMENTS_SPAN[index].style.top =
            e.pageY - element.offsetTop + "px";
    });
});
