document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuIcon = document.querySelector('.menu-icon');
    const fullscreenMenu = document.querySelector('.fullscreen-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuItems = document.querySelectorAll('.menu-item');
    const audio = new Audio('https://www.palmenburg.com/site_palmenburg/audio/hover.mp3');
    let isMenuOpen = false;

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;

        menuIcon.classList.toggle('active');
        menuOverlay.classList.toggle('active'); // تفعيل وإيقاف الـ overlay

        // إضافة انيميشن عند فتح القائمة
        setTimeout(() => {
            fullscreenMenu.classList.toggle('active');
        }, isMenuOpen ? 500 : 0);

        if (isMenuOpen) {
            gsap.to(menuItems, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                stagger: 0.1, // فاصل زمني بين العناصر
                delay: 0.5, // تأخير صغير
                ease: "power4.out" // تأثير انيميشن حركي
            });
        } else {
            gsap.to(menuItems, {
                opacity: 0,
                y: 20,
                duration: 0.3,
                ease: "power1.in"
            });
        }
    };

    menuToggle.addEventListener('click', toggleMenu);

    menuItems.forEach(item => {
        item.addEventListener('mouseover', () => {
            gsap.to(item, {
                scale: 1.1,
                zIndex: 10,
                duration: 0.3,
                ease: "back.out(1.7)"
            });
            audio.play();
        });

        item.addEventListener('mouseout', () => {
            gsap.to(item, {
                scale: 1,
                zIndex: 1,
                duration: 0.3,
                ease: "back.in(1.7)"
            });
        });
    });

    document.querySelector('.brand').addEventListener('click', () => {
        location.reload();
    });
});