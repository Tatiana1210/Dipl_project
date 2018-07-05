<html>
<script src="js/localstorage.js" charset="utf-8"></script>
<h2>Я хочу узнать свой уровень по:</h2>
<a class="reg" href="/Level_eng"> Английскому</a>
<a class="reg" href="/Level_de"> Немецкому</a>
<br>
<form class="" action="/Processing_test_results" method="post">
<div  id="test_container">
  <label class="test_level"><?php echo $questions['text_question'];?></label>
  <?php foreach ($answers as $key => $value):?>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer" value="1"  style="width: 7vh; height:7vh; margin-left:2%; "><span><?php echo $value['text_answer'];?></span></li>
  <li class="check"> <input type="checkbox" name="answer" value="2"  style="width: 7vh; height:7vh; margin-left:2%; "><span><?php echo $value['text_answer'];?></span></li>
  <li class="check"> <input type="checkbox" name="answer" value="3"  style="width: 7vh; height:7vh; margin-left:2%; "><span><?php echo $value['text_answer'];?></span></li>
  <li class="check"> <input type="checkbox" name="answer" value="4"  style="width: 7vh; height:7vh; margin-left:2%; "><span><?php echo $value['text_answer'];?></span></li>
  </ul>
  <?php endforeach; ?>
  <a href= "/Level_eng/<?php echo $questions['id_question'];?>" ?>"><img src="/img/prev.png"></a>
  <a href= "/Level_eng/<?php echo $questions['id_question'];?>" ?>"><img src="/img/next.png"></a>
 </div>
 </form>


 <h2> Оценка результатов: </h2>
 <ul>
 <li> 0-8 – Beginner (начальный уровень) </li>
 <li> 9-14 – Elementary (базовый уровень)</li>
 <li> 15-22 – Pre-intermediate (ниже среднего) 23-30 – Intermediate (средний)</li>
 <li> 31-35 – Upper-intermediate (выше среднего) 36-40 –Advanced (продвинутый)</li>
 </ul>

 <!-- Ответы 23142 23134 34341 12423 44234 22243 14231 34243 -->
 </html>

 <!-- <div class="test_level_2">
  <label class="test_level"> 2. Что такое альтернативный вопрос в английском языке? </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer2[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>Вопрос, требующий ответа «Да» или «Нет».</span></li>
  <li class="check"> <input type="checkbox" name="answer2[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>Вопрос, являющийся уточнением какого-либо утверждения.</span></li>
  <li class="check"> <input type="checkbox" name="answer2[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>Специальный вопрос к любому члену предложения.</span></li>
  <li class="check"> <input type="checkbox" name="answer2[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>Вопрос, предполагающий выбор между двумя качествами, предметами или действиями. Вопрос, являющийся уточнением какого-либо утверждения.</span></li>
  </ul>
 </div>
 <div class="test_level_3">
  <label class="test_level"> 3. Yesterday I ................. a bird. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer3[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>saw</span></li>
  <li class="check"> <input type="checkbox" name="answer3[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>sawed</span></li>
  <li class="check"> <input type="checkbox" name="answer3[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>see</span></li>
  <li class="check"> <input type="checkbox" name="answer3[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>seed</span></li>
  </ul>
 </div>
 <div class="test_level_4">
  <label class="test_level"> 4. Найдите неправильный глагол: to play, to smile, to laugh, to see. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer4[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>to play</span></li>
  <li class="check"> <input type="checkbox" name="answer4[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>to smile</span></li>
  <li class="check"> <input type="checkbox" name="answer4[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>to laugh</span></li>
  <li class="check"> <input type="checkbox" name="answer4[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>to see</span></li>
  </ul>
 </div>
 <div class="test_level_5">
  <label class="test_level">5. При помощи какого суффикса может образовываться наречие в английском языке? От какой части речи? </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer5[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>При помощи суффикса «-ly» от глаголов.</span></li>
  <li class="check"> <input type="checkbox" name="answer5[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>При помощи суффикса «-ly» от прилагательных.</span></li>
  <li class="check"> <input type="checkbox" name="answer5[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>При помощи суффикса «-ed» от существительных.</span></li>
  <li class="check"> <input type="checkbox" name="answer5[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>При помощи суффикса «-ing» от прилагательных.</span></li>
  </ul>
 </div>
 <div class="test_level_6">
  <label class="test_level">6. Укажите существительное, имеющее неправильную форму множественного числа.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer6[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>lady </span></li>
  <li class="check"> <input type="checkbox" name="answer6[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>gentleman</span></li>
  <li class="check"> <input type="checkbox" name="answer6[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>son</span></li>
  <li class="check"> <input type="checkbox" name="answer6[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>daughter</span></li>
  </ul>
 </div>
 <div class="test_level_7">
  <label class="test_level"> 7. Найдите ошибку в трѐх формах глагола:</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer7[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  </span></li>
  <li class="check"> <input type="checkbox" name="answer7[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>catch – caught – caught</span></li>
  <li class="check"> <input type="checkbox" name="answer7[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>bring – braught – braught</span></li>
  <li class="check"> <input type="checkbox" name="answer7[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>seek – sought – sought</span></li>
  </ul>
 </div>
 <div class="test_level_8">
  <label class="test_level"> 8.Выберите наиболее подходящий ответ! “What is she doing?”</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer8[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>She is playing with the bunny.</span></li>
  <li class="check"> <input type="checkbox" name="answer8[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>  She is a manager.</span></li>
  <li class="check"> <input type="checkbox" name="answer8[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> She cleans the house every day.</span></li>
  <li class="check"> <input type="checkbox" name="answer8[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> She is clean the carpet.</span></li>
  </ul>
 </div>
 <div class="test_level_9">
  <label class="test_level"> 9.Как совершается действие, выраженное глаголом в Present Continuous?</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer9[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>Действие, выраженное глаголом в Present Continuous, во всех случаях совершается постоянно или регулярно в настоящем времени.</span></li>
  <li class="check"> <input type="checkbox" name="answer9[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>  Действие совершается всегда в будущем времени.</span></li>
  <li class="check"> <input type="checkbox" name="answer9[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>  Действие совершается в данный момент, или момент речи в настоящем времени.</span></li>
  <li class="check"> <input type="checkbox" name="answer9[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> Действие уже совершено, и в предложении подчеркивается результат такого действия.</span></li>
  </ul>
 </div>
 <div class="test_level_10">
  <label class="test_level"> 10. Karina never minds ................. the movie again.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer10[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>to watch</span></li>
  <li class="check"> <input type="checkbox" name="answer10[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>to be watched</span></li>
  <li class="check"> <input type="checkbox" name="answer10[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> watch </span></li>
  <li class="check"> <input type="checkbox" name="answer10[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> watching</span></li>
  </ul>
 </div>
 <div class="test_level_11">
  <label class="test_level"> 11. I couldn’t help ................. .</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer11[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>for laughing</span></li>
  <li class="check"> <input type="checkbox" name="answer11[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>and laughed</span></li>
  <li class="check"> <input type="checkbox" name="answer11[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> laughing</span></li>
  <li class="check"> <input type="checkbox" name="answer11[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>  to laughed</span></li>
  </ul>
 </div>
 <div class="test_level_12">
  <label class="test_level">  12. Можно мне взять Ваш карандаш? </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer12[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>Can I take your pencil?</span></li>
  <li class="check"> <input type="checkbox" name="answer12[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>Must I take your pencil? </span></li>
  <li class="check"> <input type="checkbox" name="answer12[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> Should I take your pencil?</span></li>
  <li class="check"> <input type="checkbox" name="answer12[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> May I take your pencil? </span></li>
  </ul>
 </div>
 <div class="test_level_13">
  <label class="test_level"> 13. Марта никогда не слышала, как он говорит по-английски.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer13[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>Martha never heard him spoke English.</span></li>
  <li class="check"> <input type="checkbox" name="answer13[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>Martha never heard him to speak English. </span></li>
  <li class="check"> <input type="checkbox" name="answer13[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> Martha has never heard him speak English.</span></li>
  <li class="check"> <input type="checkbox" name="answer13[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> Martha never heard how he speaks English. </span></li>
  </ul>
 </div>
 <div class="test_level_14">
  <label class="test_level">  14. Я знаю его четыре года.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer14[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> I know him four years.</span></li>
  <li class="check"> <input type="checkbox" name="answer14[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> I have been knowing him for four years.</span></li>
  <li class="check"> <input type="checkbox" name="answer14[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>  I know him for four years.</span></li>
  <li class="check"> <input type="checkbox" name="answer14[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> I have known him for four years.</span></li>
  </ul>
 </div>
 <div class="test_level_15">
  <label class="test_level">15. В каком из представленных ниже слов звук, который передаѐтся буквой «a», отличается от остальных:</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer15[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> map</span></li>
  <li class="check"> <input type="checkbox" name="answer15[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>tape </span></li>
  <li class="check"> <input type="checkbox" name="answer15[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>age</span></li>
  <li class="check"> <input type="checkbox" name="answer15[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>make</span></li>
  </ul>
 </div>
 <div class="test_level_16">
  <label class="test_level"> 16. I have ................. butter, please, buy some.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer16[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>little </span></li>
  <li class="check"> <input type="checkbox" name="answer16[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>many</span></li>
  <li class="check"> <input type="checkbox" name="answer16[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>few</span></li>
  <li class="check"> <input type="checkbox" name="answer16[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> a few</span></li>
  </ul>
 </div>
 <div class="test_level_17">
  <label class="test_level"> 17. The taxi ................. by 7 o’clock yesterday.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer17[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>has arrived</span></li>
  <li class="check"> <input type="checkbox" name="answer17[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> had arrived</span></li>
  <li class="check"> <input type="checkbox" name="answer17[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>arrived</span></li>
  <li class="check"> <input type="checkbox" name="answer17[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>is arrived</span></li>
  </ul>
 </div>
 <div class="test_level_18">
  <label class="test_level"> 18. Должно быть, он продал свою машину.</label>
</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer18[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>It must be that he has sold his car.</span></li>
  <li class="check"> <input type="checkbox" name="answer18[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>He must sold his car.</span></li>
  <li class="check"> <input type="checkbox" name="answer18[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>He should have solden his car.</span></li>
  <li class="check"> <input type="checkbox" name="answer18[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>He must have sold his car.</span></li>
  </ul>
 </div>
 <div class="test_level_19">
  <label class="test_level">19. Я хочу, чтобы погода была хорошая.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer19[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>I want that the weather will be fine.</span></li>
  <li class="check"> <input type="checkbox" name="answer19[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> I want the weather to be fine.</span></li>
  <li class="check"> <input type="checkbox" name="answer19[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> I want the weather be fine.</span></li>
  <li class="check"> <input type="checkbox" name="answer19[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> I want the weather being fine.</span></li>
  </ul>
 </div>
 <div class="test_level_20">
  <label class="test_level">20. Какой же он умный мальчик!</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer20[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> What an intelligent boy is he!</span></li>
  <li class="check"> <input type="checkbox" name="answer20[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> What the intelligent boy is he!</span></li>
  <li class="check"> <input type="checkbox" name="answer20[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> What an intelligent boy he is!</span></li>
  <li class="check"> <input type="checkbox" name="answer20[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> What the intelligent boy he is!</span></li>
  </ul>
 </div>
 <div class="test_level_21">
  <label class="test_level"> 21. Find the incorrect sentence.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer21[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> Though it was nine o’clock in the evening, there were not many people in the bar.</span></li>
  <li class="check"> <input type="checkbox" name="answer21[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> Although it is nine o’clock in the evening, there are not many people in the restaurant.</span></li>
  <li class="check"> <input type="checkbox" name="answer21[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> It was only nine o’clock in the morning, and there were too many people in the café.</span></li>
  <li class="check"> <input type="checkbox" name="answer21[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> Through it was eight o’clock in the morning, there weren’t many people in the pub.</span></li>
  </ul>
 </div>
 <div class="test_level_22">
  <label class="test_level">22. Какое из перечисленных ниже предложений нельзя перевести на русский язык как «Я читаю»?</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer22[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> I read magazines every day.</span></li>
  <li class="check"> <input type="checkbox" name="answer22[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> I am reading a book.</span></li>
  <li class="check"> <input type="checkbox" name="answer22[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> I have been reading the magazine for two hours.</span></li>
  <li class="check"> <input type="checkbox" name="answer22[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> Все варианты подходят.</span></li>
  </ul>
 </div>
 <div class="test_level_23">
  <label class="test_level">23. When Kate ................. at Pier 90, it was crowded with football fans.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer23[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> achieved </span></li>
  <li class="check"> <input type="checkbox" name="answer23[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> arrived </span></li>
  <li class="check"> <input type="checkbox" name="answer23[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> entered </span></li>
  <li class="check"> <input type="checkbox" name="answer23[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> reached </span></li>
  </ul>
 </div>
 <div class="test_level_24">
  <label class="test_level">24. There was no one to cheer him ................. .</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer24[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  on  </span></li>
  <li class="check"> <input type="checkbox" name="answer24[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> in  </span></li>
  <li class="check"> <input type="checkbox" name="answer24[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> up </span></li>
  <li class="check"> <input type="checkbox" name="answer24[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> over</span></li>
  </ul>
 </div>
 <div class="test_level_25">
  <label class="test_level">25. Could you possibly give me ................. ?</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer25[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> a advice </span></li>
  <li class="check"> <input type="checkbox" name="answer25[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> an advice </span></li>
  <li class="check"> <input type="checkbox" name="answer25[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> some advices </span></li>
  <li class="check"> <input type="checkbox" name="answer25[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>  a piece of advice </span></li>
  </ul>
 </div>
 <div class="test_level_26">
  <label class="test_level"> 26. Marvin asked me ................. .</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer26[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> what was my favourite vegetable</span></li>
  <li class="check"> <input type="checkbox" name="answer26[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> what my favourite vegetable was </span></li>
  <li class="check"> <input type="checkbox" name="answer26[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> what is my favourite vegetable  </span></li>
  <li class="check"> <input type="checkbox" name="answer26[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> what about my favourite vegetable</span></li>
  </ul>
 </div>
 <div class="test_level_27">
  <label class="test_level"> 27. The accident happened ................. our way home.</label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer27[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> in </span></li>
  <li class="check"> <input type="checkbox" name="answer27[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> on </span></li>
  <li class="check"> <input type="checkbox" name="answer27[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> for </span></li>
  <li class="check"> <input type="checkbox" name="answer27[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> about </span></li>
  </ul>
 </div>
 <div class="test_level_28">
  <label class="test_level"> 28. If he were not so absent-minded, he ................. you for your sister (yesterday). </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer28[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  would not mistake</span></li>
  <li class="check"> <input type="checkbox" name="answer28[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> would not have mistaken </span></li>
  <li class="check"> <input type="checkbox" name="answer28[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> would not have been mistaken </span></li>
  <li class="check"> <input type="checkbox" name="answer28[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> did not mistake </span></li>
  </ul>
 </div>
 <div class="test_level_29">
  <label class="test_level">29. If Mike lived in the country house, he ................. happier. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer29[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  was </span></li>
  <li class="check"> <input type="checkbox" name="answer29[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> is </span></li>
  <li class="check"> <input type="checkbox" name="answer29[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>  will be </span></li>
  <li class="check"> <input type="checkbox" name="answer29[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> would be </span></li>
  </ul>
 </div>
 <div class="test_level_30">
  <label class="test_level"> 30. ................. that wierd man sitting over there? </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer30[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  Which </span></li>
  <li class="check"> <input type="checkbox" name="answer30[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> Whose </span></li>
  <li class="check"> <input type="checkbox" name="answer30[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span>  Who's </span></li>
  <li class="check"> <input type="checkbox" name="answer30[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> Who </span></li>
  </ul>
 </div>
 <div class="test_level_31">
  <label class="test_level"> 31. How long ................. his house? </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer31[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  has Mr Johnson had </span></li>
  <li class="check"> <input type="checkbox" name="answer31[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> does Mr Johnson have </span></li>
  <li class="check"> <input type="checkbox" name="answer31[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> had Mr Johnson had </span></li>
  <li class="check"> <input type="checkbox" name="answer31[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> has Mr Johnson been having </span></li>
  </ul>
 </div>
 <div class="test_level_32">
  <label class="test_level"> 32. Ron has made up his ................. to become a teacher. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer32[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>   brains </span></li>
  <li class="check"> <input type="checkbox" name="answer32[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> decision </span></li>
  <li class="check"> <input type="checkbox" name="answer32[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> head </span></li>
  <li class="check"> <input type="checkbox" name="answer32[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> mind </span></li>
  </ul>
 </div>
 <div class="test_level_33">
  <label class="test_level">  33. If Deborah ................. to dinner tomorrow, I'll be happy. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer33[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> will come </span></li>
  <li class="check"> <input type="checkbox" name="answer33[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> comes </span></li>
  <li class="check"> <input type="checkbox" name="answer33[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> came </span></li>
  <li class="check"> <input type="checkbox" name="answer33[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>  was coming </span></li>
  </ul>
 </div>
 <div class="test_level_34">
  <label class="test_level"> 34. Ask somebody for ................. occupation. </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer34[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  his </span></li>
  <li class="check"> <input type="checkbox" name="answer34[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> her </span></li>
  <li class="check"> <input type="checkbox" name="answer34[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> their </span></li>
  <li class="check"> <input type="checkbox" name="answer34[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>  its </span></li>
  </ul>
 </div>
 <div class="test_level_35">
  <label class="test_level">  35. Kids shouldn't take those pills, and ................. . </label>
  <ul class="check">
  <li class="check"> <input type="checkbox" name="answer35[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  neither should she </span></li>
  <li class="check"> <input type="checkbox" name="answer35[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> neither she should </span></li>
  <li class="check"> <input type="checkbox" name="answer35[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> she did either </span></li>
  <li class="check"> <input type="checkbox" name="answer35[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> either shouldn't she </span></li>
  </ul>
 </div>
 <div class="test_level_36">
      <label class="test_level"> 36. The doctor ................. me that there would be no pain. </label>
      <ul class="check">
      <li class="check"> <input type="checkbox" name="answer36[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  sured  </span></li>
      <li class="check"> <input type="checkbox" name="answer36[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> insured </span></li>
      <li class="check"> <input type="checkbox" name="answer36[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> reassured  </span></li>
      <li class="check"> <input type="checkbox" name="answer36[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> ensured </span></li>
      </ul>
 </div>
 <div class="test_level_37">
      <label class="test_level"> 37. I am looking for an ................. method of heating. </label>
      <ul class="check">
      <li class="check"> <input type="checkbox" name="answer37[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  economics  </span></li>
      <li class="check"> <input type="checkbox" name="answer37[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> economy </span></li>
      <li class="check"> <input type="checkbox" name="answer37[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> economic  </span></li>
      <li class="check"> <input type="checkbox" name="answer37[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> economical </span></li>
      </ul>
 </div>
 <div class="test_level_38">
      <label class="test_level">  38. We try to be ................. to the needs of the customer. </label>
      <ul class="check">
      <li class="check"> <input type="checkbox" name="answer38[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  responsible </span></li>
      <li class="check"> <input type="checkbox" name="answer38[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span> responsive </span></li>
      <li class="check"> <input type="checkbox" name="answer38[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> respondent </span></li>
      <li class="check"> <input type="checkbox" name="answer38[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> response </span></li>
      </ul>
 </div>
 <div class="test_level_39">
      <label class="test_level">  39. An obstetrician/gynecologist at the pre-conception clinic suggests we ................. some further tests. </label>
      <ul class="check">
      <li class="check"> <input type="checkbox" name="answer39[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span>  doing </span></li>
      <li class="check"> <input type="checkbox" name="answer39[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>  to do </span></li>
      <li class="check"> <input type="checkbox" name="answer39[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> are doing </span></li>
      <li class="check"> <input type="checkbox" name="answer39[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span> should do </span></li>
      </ul>
 </div>
 <div class="test_level_40">
      <label class="test_level"> 40. This particular college has a very selective ................. policy. </label>
      <ul class="check">
      <li class="check"> <input type="checkbox" name="answer40[]" value="v1" style="width: 7vh; height:7vh; margin-left:2%; "><span> acceptance </span></li>
      <li class="check"> <input type="checkbox" name="answer40[]" value="v2" style="width: 7vh; height:7vh; margin-left:2%; "><span>  entrance </span></li>
      <li class="check"> <input type="checkbox" name="answer40[]" value="v3" style="width: 7vh; height:7vh; margin-left:2%; "><span> admissions</span></li>
      <li class="check"> <input type="checkbox" name="answer40[]" value="v4" style="width: 7vh; height:7vh; margin-left:2%; "><span>  admittance </span></li>
      </ul>
 </div>
 <button type="submit" name="test_result_button">Узнать результат</button>
 </form>
</div>
 -->
