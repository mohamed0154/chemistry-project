var questionAerea = document.querySelector('.quiz')
var nextBtn = document.querySelector(".next");
var currentIndex = 0;
let reightAnswerDone = 0
function getQuestions() {
    let request = new XMLHttpRequest();


    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){

            let qObject = JSON.parse(this.responseText)
            let qcount = qObject.length;

            showQuestions(qObject[currentIndex],qcount)

            nextBtn.onclick = () => {
                  let reightAnswer = qObject[currentIndex].right_answer
                CheckAnswer(reightAnswer,qcount)

                currentIndex++

                questionAerea.innerHTML= ''
                showQuestions(qObject[currentIndex],qcount)
                showresult(qcount);
            };

        }
    }

    request.open('GET', './json/questions.json',true)
    request.send()
}
getQuestions();

function showQuestions(qObject,qcount){
    if (currentIndex < qcount) {
        let questionTitle = document.createElement('h4')

    questionTitle.innerHTML = `Q: ${qObject['question']}`

    questionAerea.appendChild(questionTitle)

    let answerArea = document.createElement('div')
    answerArea.className = 'answers'

for (let i = 1; i <= 4; i++) {
    let answer_box = document.createElement('div')
    answer_box.className = 'answer_box'


// create input answer
    let input = document.createElement('input')

    input.type = 'radio'
    input.name = `Answer`
    input.id = `Answer_${i}`
    input.dataset.answer = [qObject[`ans_${i}`]]

    answer_box.appendChild(input)

// create lable answer

    let lable = document.createElement('lable')
    lable.htmlfor = `Answer_${i}`
    lable.innerHTML = [qObject[`ans_${i}`]]
    answer_box.appendChild(lable)


    questionAerea.appendChild(answer_box)


}


    questionAerea.appendChild(answerArea);

    }


}

function CheckAnswer(reightAnswer, qcount) {

    let answers = document.getElementsByName("Answer")
    let ChosseAnswer;


    for (let i = 0; i < answers.length; i++) {
        if (answers[i].checked) {
            ChosseAnswer = answers[i].dataset.answer
        }

    }



    if (ChosseAnswer == reightAnswer) {
        reightAnswerDone++

    }

}


function showresult(qcount) {


    if (currentIndex === qcount) {
        nextBtn.remove()




       let result =  document.createElement("h1")
        result.className = 'result'
        result.innerHTML = `your score </br> ${reightAnswerDone * 10}/100`
        result.style.textAlign = 'center'

        questionAerea.appendChild(result)


        let theResults;
        if (reightAnswerDone > (qcount / 2) && reightAnswerDone < qcount ) {
            theResults = `<span class="good" >Good</span>`;
        }else if (reightAnswerDone === qcount) {
            theResults = `<span class="perfect">Perfect</span>, All Answers Is Good`;
        } else {
            theResults = `<span class="bad">Bad</span>`;
        }

        let comment = document.createElement('div')

        comment.innerHTML = theResults
        comment.style.textAlign = 'center'
        comment.style.display = 'block'
        comment.style.fontSize = '2rem'
        comment.style.marginBottom = '1.5rem'

        questionAerea.appendChild(comment)






        let backHome = document.createElement('a')
        backHome.style.display = 'flex'
        backHome.style.justifyContent = 'center'
        backHome.style.textDecoration = 'none'
        backHome.style.color = '#852b08'
        backHome.style.fontSize = '1.5rem'

        backHome.innerText = 'back to home'
        backHome.href = './Quiz1'
        questionAerea.appendChild(backHome)
    }
    console.log(qcount);
    console.log(currentIndex);
}
