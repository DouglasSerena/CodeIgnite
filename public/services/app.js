import { valid } from "./valid.js";

window.onload = () => {
  const inputs = document.querySelectorAll("[data-type]");

  inputs.forEach((input) => {
    if (input.dataset.type === "price") {
      SimpleMaskMoney.setMask(input, {
        allowNegative: false,
        negativeSignAfter: false,
        prefix: "R$ ",
        fixed: true,
        fractionDigits: 2,
        decimalSeparator: ",",
        thousandsSeparator: ".",
        cursor: "move",
      });
    }

    input.addEventListener("invalid", (e) => {
      e.preventDefault();

      valid(input);
    });

    input.addEventListener("input", () => {
      valid(input);
    });

    input.addEventListener("blur", () => {
      valid(input);
    });
  });
};
