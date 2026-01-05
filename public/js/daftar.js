document.addEventListener("DOMContentLoaded", () => {
    const steps = document.querySelectorAll(".form-step:not(.finish-step)");
    const finishStep = document.querySelector(".finish-step");
    const indicators = document.querySelectorAll(".step");

    let current = 0;

    showStep(current);

    document.querySelectorAll(".btn-next").forEach(btn => {
        btn.addEventListener("click", () => {
            if (!validate()) return;

            if (current < steps.length - 1) {
                current++;
                showStep(current);
            } else {
                goFinish();
            }
        });
    });

    document.querySelectorAll(".btn-prev").forEach(btn => {
        btn.addEventListener("click", () => {
            if (current > 0) {
                current--;
                showStep(current);
            }
        });
    });

    function showStep(index) {
        steps.forEach(s => s.classList.remove("active"));
        indicators.forEach(i => i.classList.remove("active"));

        steps[index].classList.add("active");
        indicators[index].classList.add("active");
    }

    function goFinish() {
        steps.forEach(s => s.classList.remove("active"));
        document.querySelector(".form-controls").style.display = "none";
        finishStep.classList.add("active");
    }

    function validate() {
        let valid = true;
        steps[current].querySelectorAll("input, select").forEach(el => {
            if (!el.checkValidity()) {
                el.reportValidity();
                valid = false;
            }
        });
        return valid;
    }
});
