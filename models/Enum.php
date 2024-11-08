<?php
enum CommentStatusEnum: string {
    case Visible = 'visible';
    case Hidden = 'hidden';
}

enum NewsStatusEnum: string {
    case Visible = 'visible';
    case Hidden = 'hidden';
}

enum RatingsStatusEnum: string {
    case Visible = 'visible';
    case Hidden = 'hidden';
}

enum UsersStatusEnum: string {
    case Active = 'active';
    case Banned = 'banned';
    case Deleted = 'deleted';
}
?>
