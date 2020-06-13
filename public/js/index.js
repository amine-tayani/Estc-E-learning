//alert("hello");
const header = document.querySelector("#header");


const bannerTL = gsap.timeline();

//title
const h1Line = document.querySelectorAll(".slider-carousel h2");

//feature
const featuresList = document.querySelectorAll(".feature-list li");



gsap.from(header , {
    delay: 0.2,
     x: -100,
    skewX: 2,
    duration: 0.8,
    opacity: 0,
    ease: "power3.out"
});



const featuresTl = gsap.timeline();

featuresTl.from(featuresList, {
    delay: -0.4,
    opacity: 0,
    y: 40,
    duration: 0.6,
    ease: "power3.out",
    stagger: {
      amount: 0.4
    }
  });


  bannerTL.from(h1Line, {
    delay: -0.4,
    y: 80,
    duration: 0.8,
    ease: "power3.out",
    stagger: {
      amount: 0.2
    }
  });
  