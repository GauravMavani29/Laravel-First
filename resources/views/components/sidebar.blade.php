<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    Side bar component is working {{$name}}  
    <?php
    $users = ['a','b','c'];
    ?>
    @foreach($users as $user)
    {{$user}}
    @endforeach
</div>