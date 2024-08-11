// script.js

document.addEventListener('DOMContentLoaded', () => {
    // Intro-GIF nach 3 Sekunden ausblenden
    setTimeout(() => {
        document.getElementById('intro-gif').style.display = 'none';
        document.getElementById('main-content').style.display = 'block';
    }, 3000);

    // Scroll-Effekte hinzufügen
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-enlarged');
                entry.target.querySelectorAll('.animate').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            } else {
                entry.target.classList.remove('scroll-enlarged');
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => {
        observer.observe(section);
    });

    // Hover-Effekte für Sidebar-Links hinzufügen
    const sidebarLinks = document.querySelectorAll('.sidebar-nav ul li a');
    sidebarLinks.forEach(link => {
        link.addEventListener('mouseover', () => {
            link.style.transform = 'scale(1.1)';
            link.style.backgroundColor = '#8a2be2';
        });

        link.addEventListener('mouseout', () => {
            link.style.transform = 'scale(1)';
            link.style.backgroundColor = '#bb86fc';
        });
    });
});
