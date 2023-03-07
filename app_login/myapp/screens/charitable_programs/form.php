<div class="card shadow mb-4">
    <section class="content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-sm-12 mx-auto">
                    <?php $msg = $this->session->flashdata('msg');
                    if (!empty($msg['txt'])) : ?>
                        <div class="alert alert-block alert-<?php echo $msg['type']; ?>">
                            <button type="button" class="btn defalut" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            <i class="<?php echo $msg['icon']; ?>"></i>
                            <?php echo $msg['txt']; ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <form class="form-horizontal" action="charitable_programs/charitable_program_save" method="post" enctype="multipart/form-data">
                                <input name="charitable_program_id" type="hidden" value="<?php echo (!empty($query->charitable_program_id)) ? $query->charitable_program_id : ''; ?>" />
                                <br />
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-1">Program Title </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('title'); ?></span>
                                        <input name="title" id="title" type="text" class="form-control" onkeyup="getslug(this.value)" value="<?php echo (!empty($query->title)) ? $query->title : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-1">Program Heading </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('program_heading'); ?></span>
                                        <input name="program_heading" id="program_heading" type="text" class="form-control" value="<?php echo (!empty($query->program_heading)) ? $query->program_heading : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Short Description</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('short_description'); ?></span>
                                        <textarea name="short_description" id="short_description" type="text" class="form-control" required><?php echo (!empty($query->short_description)) ? $query->short_description : ''; ?></textarea>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Impact Number 1 </label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('seva_code'); ?></span>
                                        <input name="impact_number1" id="impact_number1" type="text" class="form-control" value="<?php echo (!empty($query->impact_number1)) ? $query->impact_number1 : ''; ?>" required />
                                        <small>Impact number and text are entered with comma seperated ex: 7,Programs</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Impact Number 2</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('impact_number2'); ?></span>
                                        <input name="impact_number2" id="impact_number2" type="text" class="form-control" value="<?php echo (!empty($query->impact_number2)) ? $query->impact_number2 : ''; ?>" required />
                                        <small>Impact number and text are entered with comma seperated ex: 8000+,beneficiaries</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Impact Number 3</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('impact_number3'); ?></span>
                                        <input name="impact_number3" id="impact_number3" type="text" class="form-control" value="<?php echo (!empty($query->impact_number3)) ? $query->impact_number3 : ''; ?>" required />
                                        <small>Impact number and text are entered with comma seperated ex: 1 million +,Lives Impacted</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-1">Impact Description</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('impact_number3'); ?></span>
                                        <textarea name="impact_description" id="impact_description" type="text" class="form-control" required><?php echo (!empty($query->impact_description)) ? $query->impact_description : ''; ?></textarea>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-3">Impact Section Side Image</label>
                                    <div class="col-sm-<?php echo !empty($query->impact_side_image) ? 8 : 10 ?>">
                                        <span class="eror"><?php echo form_error('impact_side_image'); ?></span>
                                        <input name="impact_side_image" type="file" class="form-control" value="" />
                                        <small class="custom-msg text-danger">Note: Image size Should be 480px width and 550px height</small>
                                    </div>
                                    <?php if (!empty($query->impact_side_image)) { ?>
                                        <div class="col-sm-2">
                                            <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $query->impact_side_image; ?>" width="80px" height="80px">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-3">Program Image</label>
                                    <div class="col-sm-<?php echo !empty($query->banner) ? 8 : 10 ?>">
                                        <span class="eror"><?php echo form_error('seva_image'); ?></span>
                                        <input name="banner" type="file" class="form-control" value="" />
                                        <small class="custom-msg text-danger">Note: Image size Should be 550px width and 380px height</small>
                                    </div>
                                    <?php if (!empty($query->banner)) { ?>
                                        <div class="col-sm-2">
                                            <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $query->banner; ?>" width="80px" height="80px">
                                        </div>
                                    <?php } ?>
                                </div>
                               
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="display_images">Display Image</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="radiobuttons"><input name="display_image" value="1" type="radio" <?php echo (!empty($query->display_image)) ? 'checked' : ''; ?> />
                                                <span class="lbl">Yes</span></label>
                                            &nbsp; &nbsp; &nbsp;&nbsp;
                                            <label class="radiobuttons"><input name="display_image" value="0" type="radio" <?php echo (empty($query->display_image)) ? 'checked' : ''; ?> />
                                                <span class="lbl">No</span></label>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-3">Program Video</label>
                                    <div class="col-sm-<?php echo !empty($query->program_video) ? 8 : 10 ?>">
                                        <span class="eror"><?php echo form_error('program_video'); ?></span>
                                        <input name="program_video" type="file" class="form-control" value="" />
                                        <small class="custom-msg text-danger">Note: Program Image should be uploaded to show as a video thumbnail</small>
                                    </div>
                                    <?php if (!empty($query->program_video)) { ?>
                                        <div class="col-sm-2">
                                            <video controls width="180px" height="100px">
                                              <source src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$query->program_video; ?>" type="video/mp4"  />
                                            </video>
                                            <!--<img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $query->banner; ?>" width="80px" height="80px">-->
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5">Text on Banner</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('text_on_banner'); ?></span>
                                        <textarea name="text_on_banner" type="text" class="form-control ckeditor /summernote" value=""><?php echo (!empty($query->text_on_banner)) ? $query->text_on_banner : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5">Page Side Content</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('left_description'); ?></span>
                                        <textarea name="left_description" type="text" class="form-control ckeditor" value=""><?php echo (!empty($query->left_description)) ? $query->left_description : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-5">Bottom Page Content</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('bottom_description'); ?></span>
                                        <textarea name="bottom_description" type="text" class="form-control ckeditor /summernote" value=""><?php echo (!empty($query->bottom_description)) ? $query->bottom_description : ''; ?>  </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Form Heading</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_form_heading" id="ot_form_heading" class="form-control" placeholder="Enter Form Heading " value="<?php echo (!empty($query->ot_form_heading)) ? $query->ot_form_heading : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Amount of Field 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_amount_1" id="ot_amount_1" class="form-control" placeholder="Enter Amount of Field 1 " value="<?php echo (!empty($query->ot_amount_1)) ? $query->ot_amount_1 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Amount of Field 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_amount_2" id="ot_amount_2" class="form-control" placeholder="Enter Amount of Field 2 " value="<?php echo (!empty($query->ot_amount_2)) ? $query->ot_amount_2 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Amount of Field 3</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_amount_3" id="ot_amount_3" class="form-control" placeholder="Enter Amount of Field 3 " value="<?php echo (!empty($query->ot_amount_3)) ? $query->ot_amount_3 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Amount of Field 4</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_amount_4" id="ot_amount_4" class="form-control" placeholder="Enter Amount of Field 4 " value="<?php echo (!empty($query->ot_amount_4)) ? $query->ot_amount_4 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Onetime Amount of Field 5</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="ot_amount_5" id="ot_amount_5" class="form-control" placeholder="Enter Amount of Field 5 " value="<?php echo (!empty($query->ot_amount_5)) ? $query->ot_amount_5 : '' ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Form Heading</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_form_heading" id="m_form_heading" class="form-control" placeholder="Enter Form Heading " value="<?php echo (!empty($query->m_form_heading)) ? $query->m_form_heading : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Amount of Field 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_amount_1" id="m_amount_1" class="form-control" placeholder="Enter Amount of Field 1 " value="<?php echo (!empty($query->m_amount_1)) ? $query->m_amount_1 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Amount of Field 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_amount_2" id="m_amount_2" class="form-control" placeholder="Enter Amount of Field 2 " value="<?php echo (!empty($query->m_amount_2)) ? $query->m_amount_2 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Amount of Field 3</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_amount_3" id="m_amount_3" class="form-control" placeholder="Enter Amount of Field 3 " value="<?php echo (!empty($query->m_amount_3)) ? $query->m_amount_3 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Amount of Field 4</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_amount_4" id="m_amount_4" class="form-control" placeholder="Enter Amount of Field 4 " value="<?php echo (!empty($query->m_amount_4)) ? $query->m_amount_4 : '' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Monthly Amount of Field 5</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="m_amount_5" id="m_amount_5" class="form-control" placeholder="Enter Amount of Field 5 " value="<?php echo (!empty($query->m_amount_5)) ? $query->m_amount_5 : '' ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-3">Explore Section Side Image</label>
                                    <div class="col-sm-<?php echo !empty($query->explore_side_image) ? 8 : 10 ?>">
                                        <span class="eror"><?php echo form_error('explore_side_image'); ?></span>
                                        <input name="explore_side_image" type="file" class="form-control" value="" />
                                        <small class="custom-msg text-danger">Note: Image size Should be 710px width and 450px height</small>
                                    </div>
                                    <?php if (!empty($query->explore_side_image)) { ?>
                                        <div class="col-sm-2">
                                            <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $query->explore_side_image; ?>" width="80px" height="80px">
                                        </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Page Type<span class="eror"><?php echo form_error('speciality_id'); ?></span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="type_id" id="type_id">
                                            <option value="">-- Page Type --</option>
                                            <?php foreach ($page_type as $row) : ?>
                                                <option value="<?php echo $row->type_id; ?>" <?php echo (!empty($query->type_id) && $row->type_id == $query->type_id) ? 'selected' : ''; ?>><?php echo $row->type_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Template<span class="eror"><?php echo form_error('speciality_id'); ?></span></label>
                                    <div class="col-sm-10">
                                        <select name="template_id" id="template_id" class="form-control" data-validation="required" required>
                                            <option value="">-- Template Type --</option>
                                            <?php foreach ($templates as $row) : ?>
                                                <option value="<?php echo $row->template_id; ?>" <?php echo (!empty($query->template_id) && $row->template_id == $query->template_id) ? 'selected' : ''; ?>><?php echo $row->template_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 col-md-12 control-label" for="form-field-4">Link Gallery with Programme<span class="eror"><?php echo form_error('speciality_id'); ?></span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="gallery_id" id="gallery_id">
                                            <option value="">-- Select Gallery --</option>
                                            <?php foreach ($galleries as $gallery) : ?>
                                                <option value="<?php echo $gallery->gallery_id; ?>" <?php echo (!empty($query->gallery_id) && ($gallery->gallery_id == $query->gallery_id)) ? 'selected' : ''; ?>><?php echo $gallery->gallery_name; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-6">Page Slug<span class="eror"><?php echo form_error('page_slug'); ?></span></label>
                                    <div class="col-sm-10">
                                        <input name="page_slug" id="page_slug" type="text" class="form-control" value="<?php echo (!empty($query->page_slug)) ? $query->page_slug : ''; ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title" value="<?php echo (!empty($query->meta_title)) ? $query->meta_title : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description"><?php echo (!empty($query->meta_description)) ? $query->meta_description : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Meta Keywords" value="<?php echo (!empty($query->meta_keywords)) ? $query->meta_keywords : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Other Meta Tags</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="other_meta_tags" id="other_meta_tags" class="form-control" placeholder="Other Meta Tags" value="<?php echo (!empty($query->other_meta_tags)) ? $query->other_meta_tags : '' ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">No Follow Tag</label>
                                    <div class="col-sm-10">
                                        <label class="radiobuttons"><input name="nofollow_ind" value="1" type="radio" <?php echo (!empty($query->nofollow_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">Yes</span></label>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <label class="radiobuttons"><input name="nofollow_ind" value="0" type="radio" <?php echo (empty($query->nofollow_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">No</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">No Index Tag</label>
                                    <div class="col-sm-10">
                                        <label class="radiobuttons"><input name="noindex_ind" value="1" type="radio" <?php echo (!empty($query->noindex_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">Yes</span></label>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <label class="radiobuttons"><input name="noindex_ind" value="0" type="radio" <?php echo (empty($query->noindex_ind)) ? 'checked' : ''; ?> />
                                            <span class="lbl">No</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Add Canonical URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="canonical_url" id="canonical_url" class="form-control" placeholder="Add Canonical URL" value="<?php echo (!empty($query->canonical_url)) ? $query->canonical_url : '' ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-md-2 control-label" for="form-field-4">Redirection Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="redirection_link" id="redirection_link" class="form-control" placeholder="Redirection Link" value="<?php echo (!empty($query->redirection_link)) ? $query->redirection_link : '' ?>">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-6 col-md-6 control-label" for="form-field-8">Status</label>
                                    <div class="col-sm-10">
                                        <span class="eror"><?php echo form_error('status_ind'); ?></span>
                                        <input name="status_ind" value="1" type="radio" <?php echo (!empty($query->status_ind)) ? 'checked' : ''; ?> />
                                        <span class="label label-success">Publish</span>
                                        &nbsp; &nbsp; &nbsp;&nbsp;
                                        <input name="status_ind" value="0" type="radio" <?php echo (empty($query->status_ind)) ? 'checked' : ''; ?> />
                                        <span class="label label-danger">Unpublish</span>
                                    </div>
                                </div>
                                <h3>Videos Section</h3>

                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_link_1">Video Link 1</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_1" id="video_link_1" class="form-control" placeholder="Video Link 1" value="<?php echo (!empty($query->video_link_1)) ? $query->video_link_1 : '' ?>">
                                            <small class="text-danger">Please enter youtube watch link example: https://www.youtube.com/watch?v=xcJtL7QggTI </small><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_cover_img_1">Video 1 Cover Image</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="file" name="video_cover_img_1" id="video_cover_img_1" placeholder="Page Image" value="<?php echo (!empty($query->video_cover_img_1)) ? $query->video_cover_img_1 : '' ?>">
                                            <?php if (!empty($query->video_cover_img_1) && file_exists(VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_1)) { ?>

                                                <img src="<?php echo VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_1; ?>" width="50">
                                                <input type="hidden" name="video_cover_img_1" value="<?php echo (!empty($query->video_cover_img_1)) ? $query->video_cover_img_1 : ''; ?>" />
                                            <?php } ?><br />
                                            <small class="text-danger">Please upload image with resolution 371x247 </small>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_link_2">Video Link 2</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_2" id="video_link_2" class="form-control" placeholder="Video Link 2" value="<?php echo (!empty($query->video_link_2)) ? $query->video_link_2 : '' ?>">
                                            <small class="text-danger">Please enter youtube watch link example: https://www.youtube.com/watch?v=xcJtL7QggTI </small><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_cover_img_2">Video 2 Cover Image</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="file" name="video_cover_img_2" id="video_cover_img_2" placeholder="Page Image" value="<?php echo (!empty($query->video_cover_img_2)) ? $query->video_cover_img_2 : '' ?>">
                                            <?php if (!empty($query->video_cover_img_2) && file_exists(VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_2)) { ?>

                                                <img src="<?php echo VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_2; ?>" width="50">
                                                <input type="hidden" name="video_cover_img_2" value="<?php echo (!empty($query->video_cover_img_2)) ? $query->video_cover_img_2 : ''; ?>" />
                                            <?php } ?><br />
                                            <small class="text-danger">Please upload image with resolution 371x247 </small>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_link_3">Video Link 3</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <input type="text" name="video_link_3" id="video_link_3" class="form-control" placeholder="Video Link 3" value="<?php echo (!empty($query->video_link_3)) ? $query->video_link_3 : '' ?>">
                                            <small class="text-danger">Please enter youtube watch link example: https://www.youtube.com/watch?v=xcJtL7QggTI </small><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="video_cover_img_3">Video 3 Cover Image</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="file" name="video_cover_img_3" id="video_cover_img_3" placeholder="Page Image" value="<?php echo (!empty($query->video_cover_img_3)) ? $query->video_cover_img_3 : '' ?>">
                                            <?php if (!empty($query->video_cover_img_3) && file_exists(VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_3)) { ?>

                                                <img src="<?php echo VIDEO_COVER_IMAGE_PATH . $query->video_cover_img_3; ?>" width="50">
                                                <input type="hidden" name="video_cover_img_3" value="<?php echo (!empty($query->video_cover_img_3)) ? $query->video_cover_img_3 : ''; ?>" />
                                            <?php } ?><br />

                                            <small class="text-danger">Please upload image with resolution 371x247 </small>
                                        </div>
                                    </div>
                                </div>




                                <hr>
                                <div class="form-actions form-btns">
                                    <button class="btn btn-round btn-success" type="submit">
                                        <i class="fa fa-check"></i>
                                        Save
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-round btn-default" type="reset">
                                        <i class="fa fa-refresh"></i>
                                        Reset
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <a href="sevas/seva_pages">
                                        <button class="btn btn-warning btn-round" type="button">
                                            <i class="fa fa-times"></i>
                                            Back
                                        </button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

<script src="../js-plugins/summernote/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {

        $('.summernote').summernote({
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable)
                },
                onMediaDelete: function(target) {
                    // alert(target[0].src) 
                    deleteFile(target[0].src);
                }
            },
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Mukta', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto'],
            addDefaultFonts: false,
            styleTags: [
                'p',
                {
                    title: 'Blockquote',
                    tag: 'blockquote',
                    className: 'blockquote',
                    value: 'blockquote'
                },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
        });
    })

    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "blog/upload_editor_image",
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $('.summernote').summernote("insertImage", url, 'filename');
            }
        });
    };

    function deleteFile(src) {

        $.ajax({
            data: {
                src: src
            },
            type: "POST",
            url: "blog/delete_editor_image", // replace with your url
            cache: false,
            success: function(resp) {

                console.log(resp);
            }
        });
    }
</script>