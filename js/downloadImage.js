const downloadButton = document.getElementById("download-image");
const divsToDownload = [
    document.getElementById("month-box"),
    document.getElementById("month-box-2")
];

downloadButton.addEventListener("click", () => {
    divsToDownload.forEach(div => {
        html2canvas(div).then(canvas => {
            const imgData = canvas.toDataURL("image/png");
            const link = document.createElement("a");
            link.download = div.id + ".png"; // Adjust filename as needed
            link.href = imgData;
            link.click();
        });
    });
});
