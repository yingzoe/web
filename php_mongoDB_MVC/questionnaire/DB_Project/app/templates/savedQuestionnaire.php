<?php ob_start() ?>

<h2>Upload new Questionnaire</h2>

<p>You're about to submit the following information. Is it correct?</p>

<form action="../questionaire/publish" method="POST">
	<p><input type="submit" name="submit" class="buttonSubmit" value="Yes! Submit" href="../questionaire/publish"/>
	<input type="button" class="buttonSubmit" onclick="location='../questionaire/add'" value="No, return"/></p>
</form>


<style type="text/css">
	table {
	    border-collapse: collapse;
	}

	table, th, td {
	    border: 1px solid black;
	}
</style>

<table style="text-align: center;">
<caption>
<p><strong>Title:&nbsp;</strong><?php echo $params['title']?></p> <!-- title is the attribute of the params -->
<p><strong>Description:&nbsp;</strong><?php echo $params['description']?></p>
</caption>
<tr>
	<th>Question</th>
	<th>Answer A</th>
	<th>Answer B</th>
	<th>Answer C</th>
	<th>Answer D</th>
	<th>Correct Ans.</th>
</tr>

<?php foreach ($params as $question) :?>

<tr>
	<td><?php echo $question->title ?></td>
	<td><?php echo $question->options->A ?></td>
	<td><?php echo $question->options->B ?></td>
	<td><?php echo $question->options->C ?></td>
	<td><?php echo $question->options->D ?></td>
	<td><?php echo $question->answer ?></td>
</tr>

<?php endforeach; ?>

</table>

<?php
//var_dump(Config::$mvc_db_name);
// var_dump($params)
?>

 <?php $content = ob_get_clean() ?>
 <?php include 'layout.php' ?>