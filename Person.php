<?php
class Person
{
    private $name;
    private $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }

    public function display()
    {
        $avatarUrl = "https://robohash.org/" . urlencode($this->name) . ".png?size=64x64";
        echo '<div class="col-md-4">';
        echo '<div class="card" style="width: 18rem; margin: 1rem auto;">';
        echo '<div class="card-body d-flex align-items-center">';
        echo '<img src="' . $avatarUrl . '" alt="Avatar" class="rounded-circle mr-3">';
        echo '<div>';
        echo '<h5 class="card-title mb-0">' . $this->name . '</h5>';
        echo '<p class="card-text">Role: ' . $this->role . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
