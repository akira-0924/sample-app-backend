import React from "react";
import { usePage } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/Admin/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

const Index = ({ auth }) => {
    const { data } = usePage().props;
    console.log(data);
    return (
        <AuthenticatedLayout>
            <Head title="Dashboard" />

            <section className="text-gray-600 body-font">
                <div className="container px-5 py-24 mx-auto">
                    <div className="flex flex-col text-center w-full mb-20">
                        <h1 className="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
                            Owner一覧
                        </h1>
                    </div>
                    <div className="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table className="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th className="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                        id
                                    </th>
                                    <th className="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        name
                                    </th>
                                    <th className="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        Email
                                    </th>
                                    <th className="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                        created_at
                                    </th>
                                    <th className="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {data.owners.map((owner) => (
                                    <tr key={owner.id}>
                                        <td className="px-4 py-3">
                                            {owner.id}
                                        </td>
                                        <td className="px-4 py-3">
                                            {owner.name}
                                        </td>
                                        <td className="px-4 py-3">
                                            {owner.email}
                                        </td>
                                        <td className="px-4 py-3 text-lg text-gray-900">
                                            {owner.created_at}
                                        </td>
                                        <td className="w-10 text-center">
                                            <input name="plan" type="radio" />
                                        </td>
                                    </tr>
                                ))}
                                <tr>
                                    <td className="px-4 py-3">Start</td>
                                    <td className="px-4 py-3">5 Mb/s</td>
                                    <td className="px-4 py-3">15 GB</td>
                                    <td className="px-4 py-3 text-lg text-gray-900">
                                        Free
                                    </td>
                                    <td className="w-10 text-center">
                                        <input name="plan" type="radio" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div className="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                        <button className="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                            Button
                        </button>
                    </div>
                </div>
            </section>
        </AuthenticatedLayout>
    );
};

export default Index;
