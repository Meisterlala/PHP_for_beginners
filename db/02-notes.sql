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
('Meeting with the team at 10 AM tomorrow to discuss project timelines.', 1),
('Send the finalized report to the client by EOD today.', 1),
('Review the new project proposal with a focus on financial viability.', 1),
('Plan the agenda for next week’s marketing meeting and include action points.', 1),
('Discuss the new branding strategy with the creative team.', 1),
('Draft an email for internal stakeholders about the new project launch.', 1),
('Prepare a presentation for the upcoming board meeting.', 1),

-- Notes for Bob
('Call John regarding the server issues and schedule a follow-up.', 2),
('Update the API documentation to reflect the recent changes.', 2),
('Submit the budget forecast for Q4, considering the latest financial trends.', 2),
('Prepare the slides for the quarterly review meeting with executives.', 2),
('Coordinate with the IT team to set up the new development environment.', 2),
('Review the latest security update and apply it across all systems.', 2),
('Organize a team huddle to discuss the Q4 project deliverables.', 2),

-- Notes for Charlie
('Check inventory levels for the upcoming product launch and coordinate with supply chain.', 3),
('Send the supplier invoice by COB.', 3),
('Schedule a follow-up meeting with the design team to review progress.', 3),
('Review feedback from the recent customer survey and compile a report.', 3),
('Prepare a product demo for the new line of devices.', 3),
('Evaluate the pricing strategy for the new product based on market trends.', 3),
('Discuss packaging options with the product development team.', 3),
('Coordinate the shipment schedule with logistics.', 3),

-- Notes for Dana
('Draft an email for the new product announcement, ensuring alignment with marketing goals.', 4),
('Confirm the venue booking for the event and negotiate the contract terms.', 4),
('Coordinate with the PR team on the timing of the press release.', 4),
('Update the project timeline with new deadlines based on recent changes.', 4),
('Send the invite for the product launch event to key stakeholders.', 4),
('Prepare a media kit for the upcoming press conference.', 4),
('Draft talking points for the CEO for the product unveiling.', 4),
('Follow up with vendors regarding event logistics and final contracts.', 4),

-- Notes for Eve
('Create a comprehensive marketing plan for the holiday season, including social media strategy.', 5),
('Review the analytics report and highlight key growth areas for the team.', 5),
('Organize a team-building event for next month, focusing on collaboration.', 5),
('Check the status of the ongoing ad campaign and evaluate ROI.', 5),
('Update social media content calendar for next quarter.', 5),
('Prepare a brief for the creative team regarding the new ad visuals.', 5),
('Coordinate a photo shoot for the holiday marketing campaign.', 5),
('Review competitor marketing strategies for insights.', 5),
('Set up a meeting with influencers for brand collaborations.', 5),

-- Notes for Frank
('Finalize the new website layout and gather feedback from stakeholders.', 6),
('Schedule a demo for the new software feature with the product team.', 6),
('Prepare the updated user guide for the new app release.', 6),
('Follow up with the development team on the status of the bug fixes.', 6),
('Review user feedback on the beta version of the software.', 6),
('Organize a webinar to introduce the new software features to clients.', 6),
('Ensure mobile optimization for the website redesign.', 6),
('Set up automated tests for the software’s new features.', 6),
('Coordinate with QA to ensure proper testing before release.', 6),

-- Notes for Grace
('Review all project proposals for the upcoming project.', 7),
('Send invitations for the stakeholder meeting and confirm attendance.', 7),
('Update the risk assessment report to include the latest market data.', 7),
('Plan the next phase of project implementation, ensuring all dependencies are aligned.', 7),
('Draft a status report for the steering committee.', 7),
('Review project budgets to ensure spending aligns with forecasts.', 7),
('Coordinate with HR to ensure the hiring process for the project is on track.', 7),
('Plan for potential risks and mitigation strategies.', 7),
('Prepare the project closure report for past projects.', 7),

-- Notes for Hannah
('Prepare a detailed budget report for the upcoming board meeting.', 8),
('Organize a training session for new hires on company procedures.', 8),
('Review current marketing initiatives and assess their impact.', 8),
('Coordinate with the design team on creating new materials for the campaign.', 8),
('Draft an internal memo on updated HR policies.', 8),
('Review employee performance data for the quarterly review.', 8),
('Plan an all-hands meeting to update staff on business goals.', 8),
('Collaborate with HR to implement a mentorship program.', 8),

-- Notes for Ian
('Update the customer feedback database to reflect the latest reviews.', 9),
('Review and approve the new product prototypes, ensuring they meet design standards.', 9),
('Send the quarterly sales report to finance, highlighting key trends.', 9),
('Plan logistics for the upcoming trade show and secure a booth.', 9),
('Draft a report on customer satisfaction trends for the sales team.', 9),
('Organize a product demo for potential investors.', 9),
('Follow up with vendors on supply chain delays.', 9),
('Coordinate a customer feedback survey for the latest product launch.', 9),

-- Notes for Judy
('Draft a detailed proposal for the new client, including timelines and costs.', 10),
('Schedule a project review meeting to assess the team’s progress.', 10),
('Follow up on contract negotiations with the vendor for pricing changes.', 10),
('Organize a monthly performance review with the team.', 10),
('Prepare a summary of client feedback for the upcoming review.', 10),
('Coordinate with legal to finalize the vendor contracts.', 10),
('Review the client’s project brief and ensure all requirements are addressed.', 10),
('Draft an internal report for senior management on the current project status.', 10),
('Plan a team offsite to foster collaboration and team-building.', 10);
