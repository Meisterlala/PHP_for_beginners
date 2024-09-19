CREATE SCHEMA IF NOT EXISTS notes;

CREATE TABLE IF NOT EXISTS notes.users
(
    id integer GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    name text,
    email text,

    CONSTRAINT unique_email UNIQUE (email)
);

CREATE TABLE IF NOT EXISTS notes.notes
(
    id integer GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    body text,
    user_id integer NOT NULL,

    CONSTRAINT fk_user FOREIGN KEY (user_id) 
        REFERENCES notes.users(id) 
        ON DELETE CASCADE 
        ON UPDATE CASCADE
);

INSERT INTO notes.users (name, email) VALUES 
('Alice Johnson', 'alice.johnson@example.com'),
('Bob Smith', 'bob.smith@example.com'),
('Charlie Brown', 'charlie.brown@example.com'),
('Dana White', 'dana.white@example.com'),
('Eve Black', 'eve.black@example.com'),
('Frank Green', 'frank.green@example.com'),
('Grace Lee', 'grace.lee@example.com'),
('Hannah King', 'hannah.king@example.com'),
('Ian Scott', 'ian.scott@example.com'),
('Judy Adams', 'judy.adams@example.com');


INSERT INTO notes.notes (body, user_id) VALUES
-- Notes for Alice
('Meeting with the team at 10 AM tomorrow.', 1),
('Remember to send the report to the client by EOD.', 1),
('Don’t forget to review the new project proposal.', 1),
('Plan the agenda for next week’s marketing meeting.', 1),

-- Notes for Bob
('Call John about the server issues.', 2),
('Update the documentation for the API changes.', 2),
('Submit the budget forecast for Q4.', 2),
('Prepare the presentation slides for the quarterly review.', 2),

-- Notes for Charlie
('Check the inventory levels for the new product launch.', 3),
('Send the invoice to the supplier.', 3),
('Schedule a follow-up meeting with the design team.', 3),
('Review the feedback from the recent customer survey.', 3),

-- Notes for Dana
('Draft the email for the new product announcement.', 4),
('Confirm the venue booking for the upcoming event.', 4),
('Coordinate with the PR team for the press release.', 4),
('Update the project timeline with the new deadlines.', 4),

-- Notes for Eve
('Create a marketing plan for the holiday season.', 5),
('Review the latest analytics report.', 5),
('Organize a team-building activity for next month.', 5),
('Check the status of the ongoing advertising campaign.', 5),

-- Notes for Frank
('Finalize the design for the new website layout.', 6),
('Schedule a demo of the new software feature.', 6),
('Prepare the user guide for the updated application.', 6),
('Follow up with the development team on the bug fixes.', 6),

-- Notes for Grace
('Review the proposals for the upcoming project.', 7),
('Send out the invitations for the stakeholder meeting.', 7),
('Update the risk assessment report.', 7),
('Plan the next phase of the project implementation.', 7),

-- Notes for Hannah
('Prepare the budget report for the next board meeting.', 8),
('Organize a training session for the new employees.', 8),
('Check the progress of the current marketing initiatives.', 8),
('Coordinate with the design team on the new campaign materials.', 8),

-- Notes for Ian
('Update the customer feedback database.', 9),
('Review and approve the latest product prototypes.', 9),
('Send the quarterly sales report to the finance department.', 9),
('Plan the logistics for the upcoming trade show.', 9),

-- Notes for Judy
('Draft the proposal for the new client.', 10),
('Schedule a project review meeting with the team.', 10),
('Follow up on the contract negotiations with the vendor.', 10),
('Organize the team’s monthly performance review.', 10);

