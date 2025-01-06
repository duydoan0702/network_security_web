document.getElementById("quiz-form").onsubmit = function (e) {
    e.preventDefault();
    let score = 0;
    const answers = {
      q1: "4",
      q2: "1",
      q3: "3",
      q4: "4",
      q5: "4",
      q6: "4",
      q7: "3",
      q8: "2",
    };
    const form = new FormData(e.target);
    let result = "";
    for (let [question, answer] of Object.entries(answers)) {
      if (form.get(question) === answer) {
        score++;
      } else {
        result += `<p><strong>${question.replace(
          "q",
          "Câu "
        )}:</strong> Câu trả lời sai.</p>`;
      }
    }
    document.getElementById("quiz-result").innerHTML =
      `<p>Bạn được ${score}/8 điểm.</p>` + result;
  };
  
