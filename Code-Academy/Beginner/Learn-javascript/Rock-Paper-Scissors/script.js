console.log("hi");

const getUserChoice = (userInput) => {
  userInput = userInput.toLowerCase();
  console.log(0, userInput)
  if (
    userInput === "rock" ||
    userInput === "paper" ||
    userInput === "scissors"
  ) {
    return userInput;
  } else {
    console.log(1,"Error");
  }
};

console.log(2, getUserChoice("rock"));

const getComputerChoice = () => {
  randomNumber = Math.floor(Math.random() * 3);
  switch (randomNumber) {
    case 0:
      return "paper";
      break;
    case 1:
      return "rock";
      break;
    case 2:
      return "scissors";
      break;
  }
};
console.log(3, getComputerChoice());

function determineWinner(userChoice, computerChoice) {
  console.log(4, {userChoice, computerChoice})
  if (userChoice === computerChoice) {
    return "Match nul";
  } else if (userChoice === "rock" && computerChoice === "paper") {
    return "Perdu : la feuille enveloppe la pierre";
  }
  else if (userChoice === "rock" && computerChoice === "scissors") {
    return "Gagné !";
  }
  else if (userChoice === "paper" && computerChoice === "rock") {
    return "Gagné !";
  }
  else if (userChoice === "paper" && computerChoice === "scissors") {
    return "Perdu : les ciseaux coupent la feuille";
  }
  else if (userChoice === "scissors" && computerChoice === "paper") {
    return "Gagné !";
  }
  else if (userChoice === "scissors" && computerChoice === "rock") {
    return "Perdu : la pierre casse les ciseaux";
  } else {return 'Error';}
}
console.log(5, determineWinner("paper", getComputerChoice()));
