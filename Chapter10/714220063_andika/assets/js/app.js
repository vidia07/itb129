document.addEventListener("DOMContentLoaded", () => {
  const search = document.getElementById("searchInput");
  if (!search) return;

  const rows = document.querySelectorAll("table tr");

  search.addEventListener("keyup", () => {
    const keyword = search.value.toLowerCase();

    rows.forEach((row, index) => {
      if (index === 0) return;

      const text = row.innerText.toLowerCase();
      row.style.display = text.includes(keyword) ? "" : "none";
    });
  });
});