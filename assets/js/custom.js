
document.addEventListener("DOMContentLoaded", function () {
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

document.addEventListener("DOMContentLoaded", function () {
  console.log("Script loaded and running!");

  let seeMoreBtn = document.getElementById("seeMoreBtn");
  let moreCategories = document.getElementById("moreCategories");

  if (!seeMoreBtn || !moreCategories) {
    console.error("Button or moreCategories section not found!");
    return;
  }

  seeMoreBtn.addEventListener("click", function () {
    console.log("Button clicked!");

    if (moreCategories.classList.contains("d-none")) {
      moreCategories.classList.remove("d-none");
      this.textContent = "See Less";
    } else {
      moreCategories.classList.add("d-none");
      this.textContent = "See More";
    }
  });
});


AOS.init();


