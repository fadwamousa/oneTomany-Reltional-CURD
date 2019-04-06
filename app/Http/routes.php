<?php

use App\User;
use App\Post;
/* I want to insert posts for user */
Route::get('/insert', function () {
    
    $user  = User::findOrFail(1);
    $posts = Post::create(['title'=>'Secone Title','body'=>'seconed body and body is first']);
    $user->posts()->save($posts); 
});

//read the posts for some one user

Route::get('/read',function(){
    
    $user = User::findOrFail(1);

    //dd($user);
    foreach ($user->posts as $post) {

    	echo  $post->title;
    	//print mulitple recored

    	//return one record only
    }

});

//update the post for some one user
Route::get('/update',function(){

    $post = Post::whereUserId(1)->first();
    //$post = Post::where(['user_id'=>1,'id'=>2])->first();

    $post->title = "Updated Seconed Title";
    $post->body  = "Updated Seconed Body  and the last Updated Body";
    $post->save();

});


Route::get('/update/two',function(){

    $user = User::find(1);
    
    $user->posts()->whereId(3)->update(['title'=>'Updated new laravel 5.2','body'=>'Updated Data in laravel now it becomes 5.8']);


});



//delete the post for some one user
Route::get('/delete',function(){

	$user = User::findOrFail(1);
	$user->posts()->whereId(1)->delete();
});

