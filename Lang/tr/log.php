<?php

return array(

    // Standard messages
    "item_created"                      => "Created new :item :rel.",
    "item_updated"                      => "Updated :item :rel.",
    "item_deleted"                      => "Deleted :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Created new ban on IP :rel.",
    "ip_ban_updated"                    => "Updated ban on IP :rel.",
    "ip_ban_deleted"                    => "Deleted ban on IP :rel.",
    "banned_ip_on_login"                => "Banned IP :rel for 15 minutes.",

    "ip_whitelist_created"              => "Added IP :rel to whitelist.",
    "ip_whitelist_updated"              => "Updated IP :rel on whitelist.",
    "ip_whitelist_deleted"              => "Deleted IP :rel from whitelist.",

    "system_cleanup"                    => "Ran system cleanup on :rel.",

    "api_failed_login"                  => "IP :rel failed to authenticate to API.",

    "user_successful_login"             => "Logged in to help desk.",
    "user_failed_login"                 => "Failed to authenticate.",
    "user_successful_logout"            => "Logged out of help desk.",

    "user_registered"                   => "Registered an account.",
    "user_confirmed"                    => "Confirmed their account.",
    "user_password_set"                 => "Set a password for their account.",
    "user_password_reset"               => "Reset the password for their account.",

    "user_added_to_organisation"        => "User :rel added to organisation :new_value.",
    "user_removed_from_organisation"    => "User :rel removed from organisation :old_value.",
    "user_profile_updated"              => "Updated account profile.",
    "user_left_organisation"            => "Left organisation :rel.",
    "user_organisation_emptied"         => "Removed all users from organisation :rel.",
    "user_organisation_updated"         => ":rel's organisation access level changed from :old_value to :new_value.",
    "organisation_membership_updated"   => "Updated user membership of organisation :rel.",
    "organisation_profile_updated"      => "Updated profile of organisation :rel.",
    "organisation_owner_updated"        => "Transferred organisation :rel ownership to :new_value.",

    "mass_email_queued"                 => "Queued :new_value emails in batches to be sent.",
    "mass_email_sent"                   => "Sent :new_value emails in queue.",

    "email_queue_deleted"               => "Deleted queued email to :rel.",

    "scheduled_task_run"                => "Scheduled task :rel has been run manually.",

    "selfservice_article_upvoted"       => "Positively rated article :rel.",
    "selfservice_article_downvoted"     => "Negatively rated article :rel.",
    "selfservice_comment_posted"        => "Posted a new :rel.",
    "selfservice_comment_upvoted"       => "Up-voted :rel rating from :old_value to :new_value.",
    "selfservice_comment_downvoted"     => "Down-voted :rel rating from :old_value to :new_value.",

    "ticket_opened"                     => "Opened new ticket #:rel.",
    "ticket_opened_on_behalf"           => "Opened new ticket #:rel on behalf of :new_value.",
    "ticket_opened_email"               => "Imported email as new ticket #:rel.",

    "ticket_message_reply"              => "Posted a new reply to ticket #:rel.",
    "ticket_message_note"               => "Posted a new note to ticket #:rel.",
    "ticket_message_deleted"            => "Deleted a message in ticket #:rel.",

    "ticket_user_updated"               => "Updated the user on ticket #:rel from :old_value to :new_value.",
    "ticket_subject_updated"            => "Updated the subject on ticket #:rel.",
    "ticket_department_updated"         => "Updated the department on ticket #:rel from :old_value to :new_value.",
    "ticket_status_updated"             => "Updated the status on ticket #:rel from :old_value to :new_value.",
    "ticket_priority_updated"           => "Updated the priority on ticket #:rel from :old_value to :new_value.",
    "ticket_tag_added"                  => "Added tag :new_value to ticket #:rel.",
    "ticket_tag_updated"                => "Updated tags on ticket #:rel.",
    "ticket_tag_removed"                => "Removed tag :new_value from ticket #:rel.",
    "ticket_slaplan_updated"            => "Updated the SLA plan on ticket #:rel from :old_value to :new_value.",
    "ticket_duetime_updated"            => "Updated the due time on ticket #:rel to :new_value.",
    "ticket_customfield_updated"        => "Updated custom fields on ticket #:rel.",
    "ticket_converted_user"             => "Converted internal ticket #:rel to user ticket.",
    "ticket_converted_internal"         => "Converted user ticket #:rel to internal ticket.",

    "ticket_assigned_operator"          => "Assigned :new_value to ticket #:rel.",
    "ticket_unassigned_operator"        => "Unassigned :new_value from ticket #:rel.",
    "ticket_assigned_self"              => "Assigned self to ticket #:rel.",
    "ticket_assigned_updated"           => "Updated assigned operators on ticket #:rel.",

    "ticket_locked"                     => "Locked ticket #:rel.",
    "ticket_unlocked"                   => "Unlocked ticket #:rel.",
    "ticket_locked_reply"               => "Reply could not be added to locked ticket #:rel.",

    "ticket_unmerged"                   => "Ticket :rel has been unmerged.",

    "ticket_user_blocked"               => "Blocked email :new_value (from user on ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel has been closed.",
    "ticket_inactive_closed"            => "Closed inactive ticket #:rel from status :old_value.",
    "ticket_awaiting_response"          => "Sent waiting for response email to user on ticket #:rel.",

    "ticket_split_from"                 => "Messages split from old ticket #:rel to new ticket #:new_value.",
    "ticket_split_to"                   => "Messages split from old ticket #:old_value to new ticket #:rel.",

    "ticket_attachment_saved"           => "Added attachment to ticket #:rel.",
    "ticket_attachment_deleted"         => "Deleted attachment from ticket #:rel.",

    "ticket_throttled"                  => "Rejected new ticket from :rel due to throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Added attachment ':new_value' to article ID :rel.",
    "selfservice_attachment_deleted"    => "Deleted attachment ':new_value' from to article ID :rel.",
    "ticket_unassigned_self"            => "Unassigned self from ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Reply could not be added due to ticket belonging to a disabled brand #:rel.",
    "personal_signatures_updated"       => "Updated personal signatures.",
    "check_email_failed"                => "Error: Failed to download email from account :old_value: ':rel'.",
    "invalid_department_brand"          => "Failed to set department to ':new_value' on ticket #:rel, department does not belong to ticket brand.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Sent an email with subject ':extra_rel1' to :rel.",
    "sent_template_email_to"            => "Sent ':extra_rel1' email to :rel.",
    "sent_ticket_email_to_user"         => "Sent ':extra_rel1' email to user for ticket #:rel.",
    "sent_email_to_operators"           => "Sent ':extra_rel1' email to operators.",
    "sent_ticket_email_to_operators"    => "Sent ':extra_rel1' email to operators for ticket #:rel.",
    "sent_email_to_operator_group"      => "Sent ':extra_rel1' email to operator group ':new_value' for ticket #:rel.",
    "ticket_macro_applied"              => "The macro ':new_value' was ran on ticket #:rel.",
    "ticket_macro_automatic"            => "The macro ':new_value' automatically ran on ticket #:rel.",
    "email_template_not_found"          => "Email template ID ':new_value' not found, aborted sending email.",
    "private_conversation_started"      => "Started a conversation with :rel.",
    "private_message_sent"              => "Sent a message to :rel.",
    "not_imported_replies_disabled"     => "An email :extra_rel1 was received for ticket #:rel, but was not imported as ticket email replies are disabled.",
    "not_imported_ticket_locked"        => "An email :extra_rel1 was received for ticket #:rel, but was not imported as the ticket is locked.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket user added to user group :new_value.",
    "ticket_user_removed_from_group"    => "Ticket user removed from user group :old_value.",
    "email_on_behalf"                   => "Forwarded :extra_rel2 on behalf of ':extra_rel1' in ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Sent ':extra_rel1' email to :new_value, department does not accept emails from unregistered users.",
    "deleted_user"                      => "Deleted :item ':rel' with email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Linked ticket #:rel with ticket :extra_rel1.",
    "unlinked_ticket"                   => "Unlinked ticket #:rel from ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Deleted attachment ':old_value' from queued email ':rel'.",
    "forward_ticket_email"              => "Forwarded ticket #:rel to third-party, view ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Updated :rel by :extra_rel1.",
    "selfservice_comment_status"        => "Changed status of :rel by :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Deleted comment by :extra_rel1.",
    "ticket_message_posted"             => "Posted a new :extra_rel1 to ticket #:rel.",
    "ticket_message_edited"             => "Edited a :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Failed to send email.",
    "ticket_brand_updated"              => "Updated the brand on ticket #:rel from :old_value to :new_value.",
    "export_scheduled"                  => "An export of user :rel has been scheduled.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Watching ticket #:rel.",
    "ticket_unwatching"                 => "No longer watching ticket #:rel.",
    "ticket_watch_operator"             => "Set :new_value to watch ticket #:rel.",
    "ticket_unwatch_operator"           => "Unset :new_value from watching ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Confirmed ownership of email address on behalf of user :rel.",
    "ticket_department_email_updated"   => "Updated the department email on ticket #:rel from :old_value to :new_value.",
    "ticket_watching_updated"           => "Updated watching operators on ticket #:rel.",
    "ticket_deleted"                    => "Permanently deleted ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Moved ticket #:rel to trash.",
    "ticket_restored"                   => "Restored ticket #:rel from trash.",
    "emptied_ticket_trash"              => "Automatically cleaned the ticket trash of ':old_value' records.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "A new follow up has been set up on ticket #:rel.",
    "ticket_followup_updated"           => "A follow up on ticket #:rel has been updated.",
    "ticket_followup_deleted"           => "A follow up on ticket #:rel has been deleted.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "User :old_value merged into user :rel.",
    "user_organisation_merged"          => "User organisation :old_value merged into user organisation :rel.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Updated :rel's reply templates.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => "Activated :item (add-on) :rel.",
    "addon_deactivated"                 => "Deactivated :item (add-on) :rel.",
    "addon_installed"                   => "Installed :item (add-on) :rel.",
    "addon_uninstalled"                 => "Uninstalled :item (add-on) :rel.",
    "addon_cancelled"                   => "Cancelled :item (add-on) :rel.",
    "addon_updated"                     => "Updated :item (add-on) :rel to version :new_value.",
    "ticket_reply_duetime_updated"      => "Updated the reply due time on ticket #:rel to :new_value.",
    "ticket_resolve_duetime_updated"    => "Updated the resolve due time on ticket #:rel to :new_value.",
    "ticket_duetime_unset"              => "Unset the due time on ticket #:rel.",
    "ticket_reply_duetime_unset"        => "Unset the reply due time on ticket #:rel.",
    "ticket_resolve_duetime_unset"      => "Unset the resolve due time on ticket #:rel.",
    "ticket_duetime_paused"             => "Paused the due time on ticket #:rel until next user reply.",
    "ticket_duetime_unpaused"           => "Unpaused the due times on ticket #:rel.",
    "user_email_verified"               => "Verified their email address.",
    "marked_email_as_verified"          => "Verified ownership of email address on behalf of user :rel.",
    "user_invited_to_organisation"      => "User :rel invited to organisation :extra_rel1.",
    "user_accepted_organisation_invite" => "User :rel accepted invitation to organisation :extra_rel1.",
    "user_additional_email_verified"    => "Verified an additional email address (:new_value).",
    "export_generated"                  => "Export :new_value of user :rel has been generated and stored on the system.",
    "export_deleted"                    => "Export :old_value of user :rel has been deleted from the system.",
    "user_export_generated"             => "Export :new_value of user :rel has been generated and stored on the system.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Updated their reply templates.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Deleted attachment ':old_value' from ticket #:rel.",
    "user_added_to_group"               => "User :rel added to user group :new_value.",
    "user_removed_from_group"           => "User :rel removed from user group :old_value.",
    "operator_added_to_group"           => "Operator :rel added to operator group :new_value.",
    "operator_removed_from_group"       => "Operator :rel removed from operator group :old_value.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Deleted background job :rel.",
    "background_job_retried"            => "Retried background job :rel.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Set a password for their account.",
    "password_reset_sent"               => "Reset password link sent to :rel.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Rated ticket #:rel as :extra_rel1.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => "Saved :extra_rel1 on ticket #:rel.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => "Saved :extra_rel1 on article :rel.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => "Pinned :extra_rel1 on ticket #:rel.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => "Unpinned :extra_rel1 on ticket #:rel.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Updated :rel's notification preferences.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => "Ticket(s) :new_value merged into ticket #:rel.",
    "ticket_added_cc"                   => "Email(s) :new_value added to CC address list for ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value removed from CC address list for ticket #:rel.",
    "ticket_slaplan_set"  => "Updated the SLA plan on ticket #:rel from None to :new_value.",
    "ticket_slaplan_removed"  => "Updated the SLA plan on ticket #:rel from :old_value to None.",
    "sent_feedback_email_to_operators"  => "Sent feedback received email to operators for ticket #:rel.",
    "ticket_added_cc_multiple"          => "Added :cc_emails to CC address list for ticket #:rel.",
    "timeline_ticket_added_cc_multiple" => ":user_name added CC :cc_emails",
    "ticket_removed_cc_multiple"        => "Removed :cc_emails from CC address list for #:rel.",
    "timeline_ticket_removed_cc_multiple" => ":user_name removed CC :cc_emails",
    "ticket_assigned_operators_multiple" => "Assigned :operators to ticket #:rel.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name assigned :operators",
    "ticket_unassigned_operators_multiple" => "Unassigned :operators from ticket #:rel.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name unassigned :operators",
    "ticket_watch_operator_multiple"    => "Set :operators to watch ticket #:rel.",
    "timeline_ticket_watch_operator_multiple" => ":user_name added :operators to watching",
    "ticket_unwatch_operator_multiple"  => "Unset :operators from watching ticket #:rel.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name stopped :operators from watching",
    "ticket_tag_added_single"           => "Added tag :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_single"  => ":user_name added tag :formatted_items",
    "ticket_tag_removed_single"         => "Removed tag :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_single" => ":user_name removed tag :formatted_items",
    "ticket_tag_added_multiple"         => "Added tags :formatted_items to ticket #:rel.",
    "timeline_ticket_tag_added_multiple" => ":user_name added :formatted_items tags",
    "ticket_tag_removed_multiple"       => "Removed tags :formatted_items from ticket #:rel.",
    "timeline_ticket_tag_removed_multiple" => ":user_name removed :formatted_items tags",
    "ticket_merged_multiple"            => "Merged :ticket_numbers into ticket #:rel.",
    "timeline_ticket_merged_multiple"   => ":user_name merged :ticket_numbers into this ticket",
    "linked_tickets_multiple"           => "Linked ticket #:rel with tickets :extra_rel*.",
    "timeline_linked_tickets_multiple"  => ":user_name linked with :extra_rel*",
    "unlinked_tickets_multiple"         => "Unlinked ticket #:rel from tickets :extra_rel*.",
    "timeline_unlinked_tickets_multiple" => ":user_name unlinked tickets :extra_rel*",
    "ticket_macro_automatic_multiple"   => "The macros :macros automatically ran on ticket #:rel.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name ran macros :macros",
    "ticket_customfield_updated_individual" => "Updated custom field ':field_name' on ticket #:rel.",
    "timeline_ticket_customfield_updated_individual" => ":user_name updated custom field ':field_name'",
    "timeline_ticket_opened_on_behalf"  => ":user_name opened ticket on behalf of :new_value",
    "timeline_ticket_message_deleted"   => ":user_name deleted message (:message_id) by :message_user_name",
    "timeline_ticket_user_updated"      => ":user_name changed the user from :old_value to :new_value",
    "timeline_ticket_subject_updated"   => ":user_name updated the subject <del>:old_value</del> :new_value",
    "timeline_ticket_department_updated" => ":user_name changed the department from :old_value to :new_value",
    "timeline_ticket_status_updated"    => ":user_name changed the status from :old_value to :new_value",
    "timeline_ticket_priority_updated"  => ":user_name changed the priority from :old_value to :new_value",
    "timeline_ticket_slaplan_updated"   => ":user_name changed the SLA plan from :old_value to :new_value",
    "timeline_ticket_slaplan_set"       => ":user_name set the SLA plan to :new_value.",
    "timeline_ticket_slaplan_removed"   => ":user_name removed the SLA plan (from :old_value).",
    "timeline_ticket_converted_user"    => ":user_name converted from internal ticket to user ticket",
    "timeline_ticket_converted_internal" => ":user_name converted from user ticket to internal ticket",
    "timeline_ticket_assigned_self"     => ":user_name self-assigned",
    "timeline_ticket_locked"            => ":user_name locked the ticket",
    "timeline_ticket_unlocked"          => ":user_name unlocked the ticket",
    "timeline_ticket_unmerged"          => ":user_name unmerged",
    "timeline_ticket_user_blocked"      => ":user_name blocked email :new_value",
    "timeline_ticket_closed"            => ":user_name closed the ticket",
    "timeline_ticket_inactive_closed"   => ":user_name closed due to inactivity",
    "timeline_ticket_awaiting_response" => ":user_name sent waiting for response email to user",
    "timeline_ticket_split_from"        => ":user_name slit messages into new ticket #:new_value",
    "timeline_ticket_split_to"          => ":user_name split messages from #:old_value",
    "timeline_ticket_attachment_deleted" => ":user_name deleted attachment (:attachment_id) :attachment_name from <a href='#:message_id'>message</a>",
    "timeline_ticket_unassigned_self"   => ":user_name removed their assignment",
    "timeline_ticket_macro_applied"     => ":user_name ran macro ':new_value'",
    "timeline_ticket_macro_automatic"   => ":user_name ran macro ':new_value'",
    "timeline_ticket_message_edited"    => ":user_name edited a :extra_rel1",
    "timeline_ticket_brand_updated"     => ":user_name changed the brand from :old_value to :new_value",
    "timeline_ticket_watching"          => ":user_name started watching the ticket",
    "timeline_ticket_unwatching"        => ":user_name stopped watching the ticket",
    "timeline_ticket_department_email_updated" => ":user_name changed the department email from :old_value to :new_value",
    "timeline_ticket_trashed"           => ":user_name moved to the trash",
    "timeline_ticket_restored"          => ":user_name restored from the trash",
    "timeline_ticket_followup_set"      => ":user_name created a follow up",
    "timeline_ticket_followup_updated"  => ":user_name updated a follow up",
    "timeline_ticket_followup_deleted"  => ":user_name deleted a follow up",
    "timeline_ticket_reply_duetime_updated" => ":user_name changed the reply due time to :new_value",
    "timeline_ticket_resolve_duetime_updated" => ":user_name changed the resolve due time to :new_value",
    "timeline_ticket_reply_duetime_unset" => ":user_name cleared the reply due time",
    "timeline_ticket_resolve_duetime_unset" => ":user_name cleared the resolve due time",
    "timeline_ticket_duetime_paused"    => ":user_name paused the due times",
    "timeline_ticket_duetime_unpaused"  => ":user_name unpaused the due times",
    "timeline_ticket_feedback_rating"   => ":user_name set the feedback rating to :extra_rel1", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name saved :extra_rel1", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name pinned a <a href='#:message_id'>message</a>",
    "timeline_ticket_unpinned_message"  => ":user_name unpinned a <a href='#:message_id'>message</a>",
    "ticket_attachment_rejected"        => "Attachment(s) :files blocked from ticket #:rel due to invalid file type.",
    "timeline_ticket_attachment_rejected" => "Attachment(s) :files blocked due to invalid file type",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);
