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
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    let caps = document.getElementsByClassName("text");

    if (n > slides.length)
    {
        slideIndex = 1;
    }

    if (n < 1)
    {
        slideIndex = slides.length -1;
    }

    for (i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++)
    {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    for (i = 0; i < caps.length; i++)
    {
        caps[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
    caps[slideIndex - 1].style.display = "";
    dots[slideIndex - 1].className += " active";
}
