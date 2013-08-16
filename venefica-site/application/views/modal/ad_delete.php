<script langauge="javascript">
    var adCallerElement;
    
    function startAdDeleteModal(callerElement, adId) {
        adCallerElement = callerElement;
        
        var $adId = $("#ad_delete_form input[name=adId]");
        $adId.val(adId);
        
        if ( $('#adDeleteContainer').length > 0 ) {
            $('#adDeleteContainer').removeData("modal").modal('show');
        }
    }
    
    function ad_delete_modal() {
        if ( $("#ad_delete_form").length === 0 ) {
            return;
        }
        
        disable_buttons('#ad_delete_form button');
        var $adId = $("#ad_delete_form input[name=adId]");
        
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>ajax/delete_ad',
            dataType: 'json',
            cache: false,
            data: {
                adId: $adId.val()
            }
        }).done(function(response) {
            if ( !response || response === '' ) {
                //TODO: empty result
            } else if ( response.hasOwnProperty('<?=AJAX_STATUS_ERROR?>') ) {
                //TODO
            } else if ( response.hasOwnProperty('<?=AJAX_STATUS_RESULT?>') ) {
                var adId = $adId.val();
                $adId.val('');
                
                if ( adCallerElement !== null ) {
                    var $element = $(adCallerElement);
                    $element.trigger('ad_deleted', [adId]);
                }
                
                if ( $('#adDeleteContainer').length > 0 ) {
                    $('#adDeleteContainer').modal('hide');
                }
            } else {
                //TODO: unknown response received
            }
        }).fail(function(data) {
            //
        });
    }
</script>

<div id="adDeleteContainer" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-header">
        <label class="control-label" for="fieldset">
            <blockquote>
                <p>
                    Are you sure you want to delete it?
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </p>
            </blockquote>
        </label>
    </div>
    
    <div class="modal-body">
        <form id="ad_delete_form">
            <input type="hidden" name="adId"/>
            
            <fieldset>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="control-group control-form">
                            <div class="controls">
                                <button type="button" onclick="ad_delete_modal();" class="span6 btn">YES</button>
                                <button type="button" data-dismiss="modal" class="span6 btn btn-ge">NO</button>
                            </div>
                        </div>
                    </div>
                </div><!--./submit-->
            </fieldset>
        </form>
    </div>
</div>