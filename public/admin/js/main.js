const alertDeleteTag = (tag) => {
    const id = $(tag).data('id');
    swal({
            title: 'Delete tag ?',
            text: 'The tag will be removed from the post',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/tag/delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            location.reload();
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the tag, please try again',
                            });
                        }
                    });
            }
        });
};
const alertDeleteCategory = (category) => {
    const id = $(category).data('id');
    swal({
            title: 'Delete Category ?',
            text: 'Sub-categories will be erased and can not be restored',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/category/delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            location.reload();
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the category, please try again',
                            });
                        }
                    });
            }
        });
};
const alertDeletePost = (post) => {
    const id = $(post).data('id');
    swal({
            title: 'Delete Post ?',
            text: '',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/post/delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the post, please try again',
                            });
                        }
                    });
            }
        });
};
const alertBanUser = (user) => {
    const id = $(user).data('id');
    
    swal({
            title: 'Ban User ?',
            text: 'After being banned, the user cannot access the system. Posts, categories and tags remain the same',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/user/ban', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Banned',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Could not ban the user, please try again',
                            });
                        }
                    });
            }
        });
};
const alertDeleteUser = (user) => {
    const id = $(user).data('id');
    swal({
            title: 'Delete User ?',
            text: 'The user\'s posts, categories and tags will be erased and cannot be restored. The categories and tags used in the article are owned by the administrator',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/hugo/admin/user/delete', {
                        method: 'POST',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the user, please try again',
                            });
                        }
                    });
            }
        });
};
const alertCompletedDeleteTag = (tag) => {
    const id = $(tag).data('id');
    swal({
            title: 'Delete the tag completely ?',
            text: 'The tag cannot be restored',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/tag/bin/completed-delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the post, please try again',
                            });
                        }
                    });
            }
        });
};
const alertCompletedDeleteCategory = (category) => {
    const id = $(category).data('id');
    swal({
            title: 'Delete the category completely ?',
            text: 'The category cannot be restored',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/category/bin/completed-delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the category, please try again',
                            });
                        }
                    });
            }
        });
};
const alertCompletedDeletePost = (post) => {
    const id = $(post).data('id');
    swal({
            title: 'Delete the post completely ?',
            text: 'The post cannot be restored',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/post/bin/completed-delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Fail to delete the post, please try again',
                            });
                        }
                    });
            }
        });
};
const alertCompletedDeleteUser = (user) => {
    const id = $(user).data('id');
    swal({
            title: 'Delete user completely ?',
            text: 'The user cannot be restored',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
        })
        .then((result) => {
            if (result.value) {
                fetch('/admin/user/bin/completed-delete', {
                        method: 'DELETE',
                        body: JSON.stringify({
                            id,
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((value) => {
                        if (value.status === 200) {
                            location.reload();
                            Swal(
                                'Deleted',
                                '',
                                'success',
                            )
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Failed to delete the user, please try again',
                            });
                        }
                    });
            }
        });
};

const postImageMain = (file) => {
    $('#imageMain').attr('hidden', true);
    $('#loadImage').removeAttr('hidden');
    const fileData = $(file).prop('files')[0];
    const formData = new FormData();
    formData.append('file', fileData);
    $.ajax({
        url: '/admin/post/image',
        type: 'POST',
        dataType: 'json',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
    }).done((result) => {
        $('#imageMain').val(result.location);
        $('#imageMain').removeAttr('hidden');
        $('#loadImage').attr('hidden', true);
        $("img[id='demo']").remove();
        $('#closeImg').removeAttr('hidden');
        $('#demoImg').append(`<img id="demo" src="${result.location}" alt="">`);
    });
};

$(document).ready(() => {
    $('.deleteTag').click(function handle() {
        const tag = this;
        alertDeleteTag(tag);
    });
    $('.deleteCategory').click(function handle() {
        const category = this;
        alertDeleteCategory(category);
    });
    $('.deletePost').click(function handle() {
        const post = this;
        alertDeletePost(post);
    });
    $('.banUser').click(function handle() {
        const user = this;
        alertBanUser(user);
    });
    $('.deleteUser').click(function handle() {
        const user = this;
        alertDeleteUser(user);
    });
    $('.completedDeleteTag').click(function handle() {
        const tag = this;
        alertCompletedDeleteTag(tag);
    });
    $('.completedDeleteCategory').click(function handle() {
        const category = this;
        alertCompletedDeleteCategory(category);
    });
    $('.completedDeletePost').click(function handle() {
        const post = this;
        alertCompletedDeletePost(post);
    });
    $('.completedDeleteUser').click(function handle() {
        const user = this;
        alertCompletedDeleteUser(user);
    });
    // file
    $('#file').change(function handle() {
        const file = this;
        postImageMain(file);
    });
    $('#closeImg').click(function handle() {
        $('#imageMain').val('');
        $('#closeImg').attr('hidden', true);
    });
    if($('#imageMain').val()){
        const link = $('#imageMain').val();
        $("img[id='demo']").remove();
        $('#closeImg').removeAttr('hidden');
        $('#demoImg').append(`<img id="demo" src="${link}" alt="">`);
    }
    $('#imageMain').keyup(function handle() {
        const link = $('#imageMain').val();
        $("img[id='demo']").remove();
        $('#closeImg').removeAttr('hidden');
        $('#demoImg').append(`<img id="demo" src="${link}" alt="">`);
    })


});