function toggleAlternate(questionId) {
    // Dapatkan nilai dari input radio yang dipilih berdasarkan id soal
    var selectedOption = document.querySelector(
        'input[name="' + questionId + '"]:checked'
    );

    // Dapatkan elemen "alternate" berdasarkan id soal
    var alternateElement = document.getElementById(questionId + "_alternate");

    // Jika opsi yang dipilih adalah B, C, atau D
    if (
        selectedOption &&
        (selectedOption.id.includes("B") ||
            selectedOption.id.includes("C") ||
            selectedOption.id.includes("D"))
    ) {
        // Tampilkan elemen "alternate"
        alternateElement.classList.remove("hidden");
    } else {
        // Sembunyikan elemen "alternate"
        alternateElement.classList.add("hidden");
    }

    // Score
    let scoreElement = document.getElementById(questionId + "_score");
    scoreElement.innerHTML = selectedOption.value;
}

function toggleScore(questionId) {
    let listQuestionId = ["Q4", "Q6"];
    function checkId(questionId) {
        listQuestionId.includes(questionId);
    }
    if (!checkId) {
        var selectedOption = document.querySelector(
            'input[name="' + questionId + '"]:checked'
        );

        let scoreElement = document.getElementById(questionId + "_score");
        scoreElement.innerHTML = selectedOption.value;
    } else {
        let checkboxs = document.querySelectorAll(
            'input[type="checkbox"][id^="' + questionId + '"'
        );

        let count = 0;
        let length = 0;
        checkboxs.forEach(function (checkbox) {
            if (!checkbox.value.includes("0")) {
                length++;
                if (checkbox.checked) {
                    count++;
                }
            } else {
                if (checkbox.checked) {
                    count = 0;
                    checkboxs.forEach(function (checkbox) {
                        if (!checkbox.value.includes("0")) {
                            checkbox.checked = false;
                        }
                    });
                }
            }
        });
        let scoreElement = document.getElementById(questionId + "_score");
        let score = (count / length) * 100;
        scoreElement.innerHTML = score.toFixed(2);
    }
}
