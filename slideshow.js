let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n)
{
    showSlides(slideIndex += n);
}

function currentSlide(n)
{
    showSlides(slideIndex = n);
}

function showSlides(n)
{
    let i;
    let slideImage  = document.getElementById("slideImage");
    let dots        = document.getElementsByClassName("dot");
    let caps        = document.getElementsByClassName("text");
    let links       = document.getElementsByClassName("mySlidesLinks");

    if (n > links.length)
    {
        slideIndex = 1;
    }

    if (n < 1)
    {
        slideIndex = links.length;
    }

    slideImage.src = links[slideIndex-1].innerHTML;

    for (i = 0; i < dots.length; i++)
    {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    for (i = 0; i < caps.length; i++)
    {
        caps[i].style.display = "none";
    }

    caps[slideIndex - 1].style.display = "";
    dots[slideIndex - 1].className += " active";
}
