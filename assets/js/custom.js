
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('#subscription .card');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    });

    cards.forEach(card => {
      observer.observe(card);
    });
  });

  document.getElementById("seeMoreBtn").addEventListener("click", function() {
    let moreCategories = document.getElementById("moreCategories");
    if (moreCategories.classList.contains("d-none")) {
      moreCategories.classList.remove("d-none");
      this.textContent = "See Less";
    } else {
      moreCategories.classList.add("d-none");
      this.textContent = "See More";
    }
  });

  AOS.init();

