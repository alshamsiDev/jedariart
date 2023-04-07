import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    })
})
const hiddenSection = document.querySelectorAll('.hidden');

hiddenSection.forEach((el) => observer.observe(el))
