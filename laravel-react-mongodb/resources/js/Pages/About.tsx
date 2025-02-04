import { usePage } from '@inertiajs/react';


const About = () => {
    // Access page props with usePage()
    const { props }: { props: any } = usePage();

    return (
        <div>
            <h1>Users List</h1>
            <ul>
                {props.users.map((user: { name: string; email: string }, index: number) => (
                    <li key={index}>
                        <p>Name: {user.name}</p>
                        <p>Email: {user.email}</p>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default About;
