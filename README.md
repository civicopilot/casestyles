# Case Styles

A CiviCRM extension that makes activity statuses easier to distinguish in the activity list on the case view (case summary) screen.

- **Scheduled:** light amber background.
- **Completed:** theme success-color background.
- **Cancelled, not required, and no-show:** strikethrough text.

The scope is visual styling of the case view activity list. CSS loads only for `CRM_Case_Form_CaseView` and is scoped to its `#activities` container.

**Theme support:** Relies on Riverlea (RL) CSS variables; sites not using a RL stream do not define these variables and will not work.
