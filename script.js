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
                entry.target.querySelectorAll('.project').forEach(el => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            } else {
                entry.target.classList.remove('scroll-enlarged');
            }
        });
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});
