<?php
$data = [
    [
        'id' => 1,
        'title' => 'English Grammar in Use with Answers',
        'image' => '/img/imgforshop/EnglishOnYourOwn1',
        'price' => '1400 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',
    ],
    [
        'id' => 2,
        'title' => 'Advanced Grammar in Use with Answers: A Self-Study Reference and Practice Book for Advanced Learners of English',
        'image' => '/img/imgforshop/EnglishOnYourOwn2',
        'price' => '1400 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',
    ],
    [
        'id' => 3,
        'title' => 'Essential Grammar in Use with Answers: A Self-Study Reference and Practice Book for Elementary Learners of English: With Answers',
        'image' => '/img/imgforshop/EnglishOnYourOwn3',
        'price' => '1400 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',

    ],
    [
        'id' => 4,
        'title' => 'English Grammar in Use with Answers: set of all grammar books',
        'image' => '/img/imgforshop/EnglishOnYourOwn4',
        'price' => '2800 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',
    ],
    [
        'id' => 5,
        'title' => 'Oxford Dictionary of Current English',
        'image' => '/img/imgforshop/EnglishOnYourOwn5',
        'price' => '1400 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',
    ],
    [
        'id' => 6,
        'title' => 'Cambridge Phrasal Verbs Dictionary',
        'image' => '/img/imgforshop/EnglishOnYourOwn6',
        'price' => '1400 руб',
        'description' => 'Cambridge Phrasal Verbs Dictionary: Around 6,000 phrasal verbs explained in simple language;
          Thousands of example sentences based on the Cambridge International Corpus;
          Clear advice on grammar and usage;
          Shows you the most important phrasal verbs to learn.
          This Second edition:
          Fully updated with new phrasal verbs, e.g. cosy up to, copy in;
          Lively new pictures illustrating many phrasal verbs;
          Photocopiable worksheets;
          Topic pages covering useful language areas.',
          'language' => 'English',
    ],
    [
        'id' => 8,
        'title' => 'Schritte Ubungsgrammatik: Niveau A1-B1',
        'image' => '/img/imgforshop/EnglishOnYourOwn8',
        'price' => '1010 руб',
        'description' => 'Die Schritte Ubungsgrammatik ist fur Lernende auf den Niveaustufen A1 bis B1 und deckt alle Grammatikthemen ab, die in den Prufungen der Niveaustufen A1, A2 und B1 verlangt werden. Sie ist die ideale Erganzung fur alle Lernenden, die mit Schritte plus arbeiten, kann aber auch lehrwerkunabhangig eingesetzt werden.
Die Grammatik eignet sich zum Uben, zum Vertiefen oder Wiederholen von grammatischen Strukturen im Unterricht, kann aber mithilfe des ubersichtlichen Losungsschlussels auch zum selbststandigen Lernen zu Hause genutzt werden.',
          'language' => 'English',
    ],
];

$get = $_GET;
$id = $get['id'];
function get_data_by_id($data, $id){
//    if (empty($id)) {
//        return false;
//    }
    foreach ($data as $val){
        if ($id == $val['id']){
            return $val;
        }
    }
}
if (!empty($id)) {
    $res = get_data_by_id($data, $id);
}
//[
//    'id' => 4,
//    'title' => 'Title 4',
//    'image' => 'image4'
//]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>
    <h3><?php echo $res['title']?></h3>
    <img src="<?php echo $res['image']?>.jpg" alt="<?php echo $res['image']?>">
    <img src="<?php echo $res['image']?>.jpg" alt="<?php echo $res['image']?>">
</div>
</body>
</html>
