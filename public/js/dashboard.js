document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("searchInput");
  const tableBody = document.getElementById("tableBody");
  const clearBtn = document.getElementById("clearSearch");

  if (!searchInput || !tableBody) {
    console.error("Search input atau table body tidak ditemukan!");
    return;
  }

  // Ambil semua row data
  const dataRows = Array.from(tableBody.querySelectorAll("tr.data-row"));
  const emptyRow = document.getElementById("emptyRow");
  const notFoundTemplate = document.getElementById("notFoundTemplate");

  console.log("Dashboard search initialized");
  console.log("Total data rows:", dataRows.length);

  // FUNCTION: Filter Table
  function filterTable() {
    const keyword = searchInput.value.trim().toLowerCase();

    console.log("Filtering with keyword:", keyword);

    // Update clear button visibility
    updateClearButton();

    // Kalau keyword kosong, tampilkan semua data
    if (keyword === "") {
      dataRows.forEach(row => {
        row.style.display = "";
      });

      removeNotFoundRow();

      if (dataRows.length === 0 && emptyRow) {
        emptyRow.style.display = "";
      }

      return;
    }

    // Filter data berdasarkan keyword
    let visibleCount = 0;

    dataRows.forEach(row => {
      const noPendaftaran = row.getAttribute("data-no") ? row.getAttribute("data-no").toLowerCase() : "";
      const namaSiswa = row.getAttribute("data-nama") ? row.getAttribute("data-nama").toLowerCase() : "";

      const isMatch = noPendaftaran.includes(keyword) || namaSiswa.includes(keyword);

      if (isMatch) {
        row.style.display = "";
        visibleCount++;
      } else {
        row.style.display = "none";
      }
    });

    console.log("Visible rows:", visibleCount);

    // Hide empty row saat search
    if (emptyRow) {
      emptyRow.style.display = "none";
    }

    // Kalau tidak ada hasil
    if (visibleCount === 0) {
      showNotFoundRow();
    } else {
      removeNotFoundRow();
    }
  }

  // FUNCTION: Show Not Found Row
  function showNotFoundRow() {
    if (document.getElementById("notFoundRow")) return;

    console.log("Showing not found row");

    if (notFoundTemplate) {
      const clone = notFoundTemplate.content.cloneNode(true);
      tableBody.appendChild(clone);
    }
  }

  // FUNCTION: Remove Not Found Row
  function removeNotFoundRow() {
    const notFoundRow = document.getElementById("notFoundRow");
    if (notFoundRow) {
      console.log("Removing not found row");
      notFoundRow.remove();
    }
  }

  // FUNCTION: Update Clear Button Visibility
  function updateClearButton() {
    if (clearBtn) {
      if (searchInput.value.length > 0) {
        clearBtn.style.display = "block";
      } else {
        clearBtn.style.display = "none";
      }
    }
  }

  // FUNCTION: Clear Search
  function clearSearch() {
    searchInput.value = "";
    filterTable();
    searchInput.focus();
    console.log("Search cleared");
  }

  // EVENT: Input - Real-time search
  searchInput.addEventListener("input", filterTable);

  // EVENT: Clear button click
  if (clearBtn) {
    clearBtn.addEventListener("click", clearSearch);
  }

  // EVENT: Keyboard shortcut - ESC to clear
  searchInput.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      clearSearch();
    }
  });

  // Initial load
  filterTable();
});