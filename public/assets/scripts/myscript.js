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
