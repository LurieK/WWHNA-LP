document.addEventListener('DOMContentLoaded', function() {
    

    const elementsToAnimate = document.querySelectorAll('.Jasmin, .woman, .about-heading, h4, h3, .card-examples, .donate-text, .artist-text');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                console.log(entry.target.className)
                entry.target.style.opacity = '1';
                if (entry.target.classList.contains('woman')) {
                    console.log("running woman-img animation")
                    entry.target.style.transform = 'translateX(0)';
                } else {
                    console.log('animating other classes')
                    entry.target.style.transform = 'translateY(0)';
                }
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1 
    });

    elementsToAnimate.forEach(element => {
        observer.observe(element);
    });

    
 });

// //speech bubbles
let typingTimeout; // A timeout variable for the typing function

const women = document.querySelectorAll(".woman");

function toggleBubbleVisibility(event) {
    // Get the class name of the hovered image
    const characterName = event.target.className;
    console.log('your hovering over '+ characterName)//debugging
    // Based on the character name, determine which bubble to select
    const bubbleContainer = document.querySelector(`.${characterName}-bubble-container`);

    // If a matching bubble container is found, toggle its visibility
    if (bubbleContainer) {
        const bubbleText = bubbleContainer.querySelector('.bubble-text h5');
        const bubble = bubbleContainer.querySelector(`.${characterName}-bubble`)

        // Toggle the display of the bubble and text
        if (bubble.style.opacity === '0'|| bubble.style.opacity === '') {
            bubble.style.opacity = '1';
            bubbleText.style.opacity = '1';
            
            console.log(`set ${characterName} to opacity 1`)
            // Fetch the appropriate text for the character
            const textForWoman = getTextForWoman(characterName);
        
            // Call the animateText function to display the text
            animateText(bubbleText, textForWoman);
            console.log(`animating ${characterName} text`)

        }  else {
            bubble.style.opacity = '0';
            bubbleText.style.opacity = '0';
            console.log('hiding bubble for '+ characterName)
        }
    }else{
        console.log('no bubble for '+ characterName)
    }
}

// Attach the event listener to the images
document.addEventListener('DOMContentLoaded', function() {
    const characters = document.querySelectorAll('.rosa, .greta, .lux, .rosa-bubble-container');
    characters.forEach(character => {
        character.addEventListener('mouseover', toggleBubbleVisibility);
        character.addEventListener('mouseout', toggleBubbleVisibility);
    });
});




// Add text to speech bubble
// function getTextForWoman(name) {
//     const texts = {
//         greta: "This is Greta's quote.",
//         rosa: "This is Rosa's quote.",
//         lux: "This is Lux's quote."
//     };
//     console.log(texts[name])
//     return texts[name] || "";
    
// }

function getTextForWoman(name) {
    // Find the h5 element with the appropriate class name
    const bubbleTextElement = document.querySelector(`.${name}-bubble-container .bubble-text h5`);
    // Return the text from the data attribute, or an empty string if it's not found
    console.log("date-text");
    return bubbleTextElement ? bubbleTextElement.getAttribute('data-text') : "";
}


// Typing animation
function animateText(element, text) {
    clearTimeout(typingTimeout); // Clear existing timeout
    element.textContent = "";
    let index = 0;

    function type() {
        if (index < text.length) {
            element.textContent += text.charAt(index);
            index++;
            typingTimeout = setTimeout(type, 100);
        }
    }
    type();
}



const navIcon = document.querySelector('.menu');
const mobileNav = document.querySelector('.mobile-nav');
const body = document.body;

navIcon.addEventListener('click', function() {
     mobileNav.style.display = mobileNav.style.display === 'block' ? 'none' : 'block';
    body.classList.toggle('mobile-nav-active'); // This line toggles the class on the body

});


