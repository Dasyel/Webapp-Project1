<a href="<?php echo site_url('question/create'); ?>" data-role="button" data-mini="true" data-inline="true" data-theme="b">Create Question</a>
<?php 
if (count($questions) == 0){
    echo "You have not made any questions yet";
} else {

    echo '<div data-role="collapsible-set" data-theme="c" data-content-theme="d">';
    

    
    foreach ($questions as $question){
        if($question->type == 1){
            $res_string = '<iframe width="420" height="315" src="//www.youtube.com/embed/'.$question->resource.'?rel=0" frameborder="0" allowfullscreen></iframe>';
        } else {
            $res_string = '<img src="'.$question->resource.'" alt="Question Image" width="100%">';
        }
        echo '<div data-role="collapsible">
            <h3>'.$question->name. ' ('.$question->done.')</h3>
            <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                <a href="'.site_url('question/edit/'.$question->id).'" data-role="button" data-icon="gear" data-theme="b">Edit</a>
                <a href="'.site_url('question/delete/'.$question->id).'" data-role="button" data-icon="delete" data-theme="b">Delete</a>
            </div>'
            .$res_string.
            '<ul data-role="listview" data-inset="false">
                <li><h3>'.$question->question.'</h3></li>
                <li><FONT COLOR="008000">'.$question->right_answer.'</FONT></li>
                <li><FONT COLOR="8B0000">'.$question->wrong_answer1.'</FONT></li>
                <li><FONT COLOR="8B0000">'.$question->wrong_answer2.'</FONT></li>
                <li><FONT COLOR="8B0000">'.$question->wrong_answer3.'</FONT></li>
            </ul>
            
            </div>';
    }
    
    echo '</div>';
}
?>
