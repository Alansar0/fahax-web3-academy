function switchView() {
    let stylesheet = document.getElementById("dynamic-style");
    let desktopView = document.getElementById("desktop-view");
    let mobileView = document.getElementById("mobile-view");
    let mobileView = document.getElementById("bottom-nav");


    if (window.innerWidth <= 768) {
        stylesheet.href = "mobile.css"; // Load mobile styles
        desktopView.style.display = "none";
        mobileView.style.display = "block";
    } else {
        stylesheet.href = "desktop.css"; // Load desktop styles
        desktopView.style.display = "block";
        mobileView.style.display = "none";
    }
}

// Run on page load and when the window is resized  
window.addEventListener("load", switchView);
window.addEventListener("resize", switchView);



document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
        this.classList.add('active');
    });
});

